<?php

use App\Employee;
use Illuminate\Database\Seeder;

class EmployeeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $employee = new Employee();
        $employee->group_id = '1';
        $employee->name = "Luong Manh Hai";
        $employee->dob = '1980-09-03';
        $employee->gender = 'other';
        $employee->phone = '0365639942';
        $employee->identity_number = '123956748';
        $employee->email = 'ancco@gmail.com';
        $employee->address = 'Ha Noi';
        $employee->save();

        $employee = new Employee();
        $employee->group_id = '1';
        $employee->name = "Hoang Trung Hieu";
        $employee->dob = '1996-02-13';
        $employee->gender = 'nam';
        $employee->phone = '0386664481';
        $employee->identity_number = '1567941619';
        $employee->email = 'afajfhakf@gmail.com';
        $employee->address = 'Hai Phong';
        $employee->save();

        $employee = new Employee();
        $employee->group_id = '3';
        $employee->name = "Nguyen Thanh Nam";
        $employee->dob = '2000-12-09';
        $employee->gender = 'nam';
        $employee->phone = '0321654842';
        $employee->identity_number = '123983546';
        $employee->email = 'af313@gmail.com';
        $employee->address = 'Thai Binh';
        $employee->save();

        $employee = new Employee();
        $employee->group_id = '4';
        $employee->name = "Pham Thi Hong";
        $employee->dob = '1996-07-23';
        $employee->gender = 'nu';
        $employee->phone = '0126549635';
        $employee->identity_number = '566975312';
        $employee->email = 'afaferggh64654213@gmail.com';
        $employee->address = 'Quang Ninh';
        $employee->save();

        $employee = new Employee();
        $employee->group_id = '5';
        $employee->name = "Nguyen Viet Xuan";
        $employee->dob = '1983-02-18';
        $employee->gender = 'nam';
        $employee->phone = '0112359942';
        $employee->identity_number = '135948949';
        $employee->email = '31af566af@gmail.com';
        $employee->address = 'Thai Nguyen';
        $employee->save();

        $employee = new Employee();
        $employee->group_id = '3';
        $employee->name = "Dam Duc";
        $employee->dob = '1995-04-03';
        $employee->gender = 'nu';
        $employee->phone = '01648986215';
        $employee->identity_number = '331649875';
        $employee->email = 'ducdam@gmail.com';
        $employee->address = 'Ha Noi';
        $employee->save();

        $employee = new Employee();
        $employee->group_id = '2';
        $employee->name = "Le Thi Xoan";
        $employee->dob = '1996-05-14';
        $employee->gender = 'nu';
        $employee->phone = '0362316552';
        $employee->identity_number = '123549658';
        $employee->email = 'gdgfdg13ancco@gmail.com';
        $employee->address = 'Tay Nguyen';
        $employee->save();

        $employee = new Employee();
        $employee->group_id = '5';
        $employee->name = "Nguyen Thi An";
        $employee->dob = '2001-08-13';
        $employee->gender = 'nu';
        $employee->phone = '0364682944';
        $employee->identity_number = '23665469';
        $employee->email = '1313fad13@gmail.com';
        $employee->address = 'Thai Binh';
        $employee->save();

        $employee = new Employee();
        $employee->group_id = '4';
        $employee->name = "Dinh Thi Lieu";
        $employee->dob = '1993-01-02';
        $employee->gender = 'nu';
        $employee->phone = '0366975312';
        $employee->identity_number = '359564897';
        $employee->email = '23131adada1@gmail.com';
        $employee->address = 'Son La';
        $employee->save();

        $employee = new Employee();
        $employee->group_id = '3';
        $employee->name = "Dinh Manh Ninh";
        $employee->dob = '1985-10-05';
        $employee->gender = 'nam';
        $employee->phone = '0365668842';
        $employee->identity_number = '171364848';
        $employee->email = 'fegrg3g@gmail.com';
        $employee->address = 'Ha Nam';
        $employee->save();
    }
}
