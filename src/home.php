<?php
$url = "https://zoronime.com/home/";
$html = file_get_contents($url);
$dom = new DOMDocument();
@$dom->loadHTML($html);
$xpath = new DOMXPath($dom);
$home_anime = [];
foreach ($xpath->query("//div[@class='anime']//h2[@class='title']") as $title) {
    $home_anime[] = trim($title->nodeValue);
}
print_r($home_anime);
?>
