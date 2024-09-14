<?php
$url = "https://zoronime.com/anime/";
$html = file_get_contents($url);
$dom = new DOMDocument();
@$dom->loadHTML($html);
$xpath = new DOMXPath($dom);
$anime_titles = [];
foreach ($xpath->query("//div[@class='anime']//h2[@class='title']") as $title) {
    $anime_titles[] = trim($title->nodeValue);
}
print_r($anime_titles);
?>
