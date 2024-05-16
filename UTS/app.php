<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "uts";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Gagal konek ke database: " . mysqli_connect_error());
}

function getAllData($conn)
{
    $sql = "SELECT * FROM animelist";
    $result = mysqli_query($conn, $sql);

    $data = [];

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
    }

    return $data;
}


function findAnimeByID($conn, $id)
{
    $sql = "SELECT * FROM animelist WHERE id = $id LIMIT 1";
    $result = mysqli_query($conn, $sql);


    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            return $row;
        }
    }

    return null;
}

function addData($conn, $data)
{
    $sql = "INSERT INTO animelist
    (`type`, episodes, title, studio, created_at, updated_at)
    VALUES (
        '{$data['type']}', 
        '{$data['episodes']}', 
        '{$data['title']}', 
        '{$data['studio']}', 
        NOW(), 
        NOW()
    );";
    
    if (mysqli_query($conn, $sql)) {
        return mysqli_insert_id($conn);
    }

    return null;
}

function updateData($conn, $id, $data) 
{
    $sql = "
    UPDATE animelist
    SET
        type = '{$data['type']}',
        episodes = '{$data['episodes']}',
        title = '{$data['title']}',
        studio = '{$data['studio']}',
        updated_at = NOW()
    WHERE id = $id;
    ";
    
    if(mysqli_query($conn, $sql)) {
        return $id;
    } else {
        return null;
    }
}

function deleteData($conn, $id) 
{
    $sql = "DELETE FROM animelist WHERE id = $id";

    if(mysqli_query($conn, $sql)) { 
        return true;
    } else {
        return false;
    }
}
