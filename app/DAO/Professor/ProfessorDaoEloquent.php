<?php
namespace FisiLog\DAO\Professor;
use FisiLog\BusinessClasses\Professor as ProfessorBusiness;
use FisiLog\Models\Professor as ProfessorModel;

class ProfessorDaoEloquent implements ProfessorDao {
  public function save(ProfessorBusiness $professorBusiness) {
    $professorModel = new ProfessorModel;
    $professorModel->user_id = $professorBusiness->getId();
    $professorModel->academic_department_id = $professorBusiness->getAcademicDepartment()->getId();
    $professorModel->type = $professorBusiness->getType();
    $professorModel->save();
    $professorBusiness->setId($professorModel->id);

    return $professorBusiness;
  }
}