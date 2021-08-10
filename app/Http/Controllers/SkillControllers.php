<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class SkillControllers extends Controller
{
    protected $allowedMethods = ["GET", "POST", "PUT", "DELETE"];
    public function dispatchSkill(Request $request, $id = null)
    {
        $method = $request->method();
        if ($method == "GET") {
            $resultGetPosition = $this->getSkill($request, $id);
            return $resultGetPosition;
        } else if ($method == "POST") {
            $resultPostSkill = $this->postSkill($request);
            return $resultPostSkill;
        } else if ($method == "PUT") {
            $resultEditSkill = $this->editSkill($request, $id);
            return $resultEditSkill;
        } else if ($method == "DELETE") {
            $resultDeleteSkill = $this->deleteSkill($id);
            return $resultDeleteSkill;
        }
    }

    private function getSkill($request, $id = null)
    {
        if (!empty($id) || $request->input('skillID') !== null) {
            $idSkill = !empty($id) ? $id : $request->input('skillID');
            if (empty($idSkill) == false) {
                $skillData = Skill::where('skillID', $idSkill)->firstOrFail();
                return ["result" => $skillData, "message" => "Get Skill Successfully"];
            }
        } else {
            $skillData = Skill::all();
            if (count($skillData) > 0) {
                return ["result" => $skillData, "message" => "Get Skill Successfully"];
            } else {
                // return response(["result" => $skillData, "message" => ""], 404);
                throw new NotFoundHttpException();
            }
        }
    }

    private function postSkill($request)
    {
        $request->validate([
            'skillName' => 'required'
        ]);
        $dataInserted = Skill::create($request->all());
        $lastID = $dataInserted->skillID;
        return response(["message" => "Skill Created Successfully", "lastID" => $lastID], 201);
    }

    private function editSkill($request, $id)
    {
        $developer = Skill::find($id);
        $developer->update($request->all());
        return ["message" => "Skill Edited Successfully"];
    }

    private function deleteSkill($id)
    {
        $response = Skill::destroy($id);
        return $response == 1 ? response(["message" => "Position Deleted Successfully"], 204) : response(["message" => "An error has ocurren when try to delete Position"], 404);
    }
}
