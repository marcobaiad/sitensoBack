<?php

namespace App\Http\Controllers;

use App\Models\Developers;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class DeveloperControllers extends Controller
{
    protected $allowedMethods = ["GET", "POST", "PUT", "DELETE"];
    public function dispatchDevelopers(Request $request, $id = null)
    {
        $method = $request->method();
        if ($method == "GET") {
            $resultGetPosition = $this->getDevelopers($request, $id);
            return $resultGetPosition;
        } else if ($method == "POST") {
            $resultPostDevelopers = $this->postDevelopers($request);
            return $resultPostDevelopers;
        } else if ($method == "PUT") {
            $resultEditDevelopers = $this->editDevelopers($request, $id);
            return $resultEditDevelopers;
        } else if ($method == "DELETE") {
            $resultDeleteDevelopers = $this->deleteDevelopers($id);
            return $resultDeleteDevelopers;
        }
    }

    private function getDevelopers($request, $id = null)
    {
        if (!empty($id) || $request->input('developerID') !== null) {
            $idDeveloper = !empty($id) ? $id : $request->input('developerID');
            if (empty($idDeveloper) == false) {
                $developerData = Developers::where('developerID', $idDeveloper)->firstOrFail();
                return ["result" => [$developerData], "message" => "Get Developer Successfully"];
            }
        } else {
            $developerData = Developers::all();
            if (count($developerData) > 0) {
                return ["result" => $developerData, "message" => "Get Developers Successfully"];
            } else {
                // return response(["result" => $developerData, "message" => ""], 404);
                throw new NotFoundHttpException();
            }
        }
    }

    private function postDevelopers($request)
    {
        $request->validate([
            'developerName' => 'required',
            'occupation' => 'required',
            'position' => 'required',
            'skill' => 'required',
        ]);
        $dataInserted = Developers::create($request->all());
        $lastID = $dataInserted->developerID;
        return response(["message" => "Developer Created Successfully", "lastID" => $lastID], 201);
    }

    private function editDevelopers($request, $id)
    {
        $developer = Developers::find($id);
        $developer->update($request->all());
        return ["message" => "Developer Edited Successfully"];
    }

    private function deleteDevelopers($id)
    {
        $response = Developers::destroy($id);
        return $response == 1 ? response(["message" => "Developer Deleted Successfully"], 204) : response(["message" => "An error has ocurren when try to delete Developer"], 404);
    }
}
