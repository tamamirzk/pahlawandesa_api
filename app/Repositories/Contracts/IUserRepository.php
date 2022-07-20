<?php

namespace App\Repositories\Contracts;

interface IUserRepository extends IGenericRepository
{
    public function login(array $data);
    public function register(array $data);
    public function emailRecovery(array $data);
    public function verify($id);
    public function getToken($user_id);
    public function getRefreshToken($refresh_token);
    public function userUpdate($id, array $data);
    public function registerInfoKabupaten();
    public function registerInfoKecamatan($kabupaten_id);
    public function registerInfoVillage($kecamatan_id);
}