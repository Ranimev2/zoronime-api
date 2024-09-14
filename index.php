<?php
// ... (scraping and database code remains the same)

// Display the data using EJS template
require_once 'index.ejs';
$ejs = new EJS();

// Retrieve data from the database
$result = mysqli_query($conn, "SELECT * FROM anime");
$anime_data = array();
while ($row = mysqli_fetch_assoc($result)) {
    $anime_data[] = $row;
}

$result = mysqli_query($conn, "SELECT * FROM episodes");
$episode_data = array();
while ($row = mysqli_fetch_assoc($result)) {
    $episode_data[] = $row;
}

$result = mysqli_query($conn, "SELECT * FROM ended_anime");
$ended_anime = array();
while ($row = mysqli_fetch_assoc($result)) {
    $ended_anime[] = $row;
}

// Render the EJS template
$ejs->assign('anime_data', $anime_data);
$ejs->assign('episode_data', $episode_data);
$ejs->assign('ended_anime', $ended_anime);
echo $ejs->render('index');
