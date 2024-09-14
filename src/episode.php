<?php
$url = "https://zoronime.com/episode/";
$html = file_get_contents($url);
$dom = new DOMDocument();
@$dom->loadHTML($html);
$xpath = new DOMXPath($dom);
$episode_data = [];
foreach ($xpath->query("//div[@class='episode']") as $episode) {
    $title = trim($episode->getElementsByTagName('h2')->item(0)->nodeValue);
    $url = $episode->getElementsByTagName('a')->item(0)->getAttribute('href');
    $episode_data[] = array('title' => $title, 'url' => $url);
}
print_r($episode_data);
?>
