<?php

use Illuminate\Support\Facades\Route;

// Developer Routes
Route::get('/developers/{id?}', 'DeveloperControllers@dispatchDevelopers');

Route::post('/developers', 'DeveloperControllers@dispatchDevelopers');

Route::put('/developers/{id?}', 'DeveloperControllers@dispatchDevelopers');

Route::delete('/developers/{id?}', 'DeveloperControllers@dispatchDevelopers');

// Position Routes
Route::get('/position/{id?}', 'PositionControllers@dispatchPositions');

Route::post('/position', 'PositionControllers@dispatchPositions');

Route::put('/position/{id?}', 'PositionControllers@dispatchPositions');

Route::delete('/position/{id?}', 'PositionControllers@dispatchPositions');

// Skill Routes

Route::get('/skill/{id?}', 'SkillControllers@dispatchSkill');

Route::post('/skill', 'SkillControllers@dispatchSkill');

Route::put('/skill/{id?}', 'SkillControllers@dispatchSkill');

Route::delete('/skill/{id?}', 'SkillControllers@dispatchSkill');
