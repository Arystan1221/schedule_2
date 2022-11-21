<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of StudentMap
 *
 * @author Arystan
 */
class StudentMap extends BaseMap {
    public function findById($id = null) {
        if ($id) {
            $res = $this->db->query("SELECT user_id, otdel_id FROM student WHERE user_id = $id");
            $student = $res->fetchObject("Student");
            if ($student) {
                return $student;
            }
        }
        return new Student();
    }
    public function save(User $user, Student $student) {
        if ($user->validate() && $student->validate() && (new UserMap())->save($user)) {
            if ($student->user_id == 0) {
                $student->user_id = $user->user_id;
                return $this->insert($student);
            } else {
                return $this->update($student);
            }
        }
        return false;
    }

    private function insert(Student $student) {

        if ($this->db->exec("INSERT INTO student(user_id,otdel_id) VALUES($student->user_id, $student->otdel_id)") == 1) {
            return true;
        }
        return false;
    }

    private function update(Student $student) {

        if ($this->db->exec("UPDATE student SET otdel_id = $student->otdel_id WHERE user_id=" . $student->user_id) == 1) {
            return true;
        }
        return false;
    }
    public function findAll($ofset = 0, $limit = 30) {
        $res = $this->db->query("SELECT user.user_id,
CONCAT(user.lastname,' ', user.firstname, ' ',
user.patronymic) AS fio, user.birthday, "
                . " gender.name AS gender, otdel.name AS otdel,
role.name AS role FROM user INNER JOIN student ON
user.user_id=student.user_id "
                . "INNER JOIN gender ON
user.gender_id=gender.gender_id INNER JOIN otdel ON
student.otdel_id=otdel.otdel_id" . " INNER JOIN role ON user.role_id=role.role_id LIMIT $ofset, $limit");

        return $res->fetchAll(PDO::FETCH_OBJ);
    }

    public function count() {
        $res = $this->db->query("SELECT COUNT(*) AS cnt FROM student");
        return $res->fetch(PDO::FETCH_OBJ)->cnt;
    }
    public function findProfileById($id = null) {
        if ($id) {
            $res = $this->db->query("SELECT student.user_id,
otdel.name AS otdel FROM student " . "INNER JOIN otdel ON
student.otdel_id=otdel.otdel_id WHERE student.user_id =
$id");
            return $res->fetch(PDO::FETCH_OBJ);
        }
        return false;
    }
}