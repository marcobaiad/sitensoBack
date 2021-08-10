<?php

namespace App\Http\Controllers;

use App\Models\Position;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class PositionControllers extends Controller
{
    protected $allowedMethods = ["GET", "POST", "PUT", "DELETE"];
    public function dispatchPositions(Request $request, $id = null)
    {
        $method = $request->method();
        if ($method == "GET") {
            $resultGetPosition = $this->getPosition($request, $id);
            return $resultGetPosition;
        } else if ($method == "POST") {
            $resultPostPosition = $this->postPosition($request);
            return $resultPostPosition;
        } else if ($method == "PUT") {
            $resultEditPosition = $this->editPosition($request, $id);
            return $resultEditPosition;
        } else if ($method == "DELETE") {
            $resultDeletePosition = $this->deletePosition($id);
            return $resultDeletePosition;
        }
    }

    private function getPosition($request, $id = null)
    {
        if (!empty($id) || $request->input('positionID') !== null) {
            $isPosition = !empty($id) ? $id : $request->input('positionID');
            if (empty($isPosition) == false) {
                $positionData = Position::where('positionID', $isPosition)->firstOrFail();
                return ["result" => $positionData, "message" => "Get Position Successfully"];
            }
        } else {
            $positionData = Position::all();
            if (count($positionData) > 0) {
                return ["result" => $positionData, "message" => "Get Position Successfully"];
            } else {
                // return response(["result" => $positionData, "message" => ""], 404);
                throw new NotFoundHttpException();
            }
        }
    }

    private function postPosition($request)
    {
        $request->validate([
            'positionName' => 'required'
        ]);
        $dataInserted = Position::create($request->all());
        $lastID = $dataInserted->positionID;
        return response(["message" => "Position Created Successfully", "lastID" => $lastID], 201);
    }

    private function editPosition($request, $id)
    {
        $position = Position::find($id);
        $position->update($request->all());
        return ["message" => "Position Edited Successfully"];
    }

    private function deletePosition($id)
    {
        $response = Position::destroy($id);
        return $response == 1 ? response(["message" => "Position Deleted Successfully"], 204) : response(["message" => "An error has ocurren when try to delete Position"], 404);
    }
}
