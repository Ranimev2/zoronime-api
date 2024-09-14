<?php
$url = "https://zoronime.com/tag/ended/";
$html = file_get_contents($url);
$dom = new DOMDocument();
@$dom->loadHTML($html);
$xpath = new DOMXPath($dom);
$ended_anime = [];
foreach ($xpath->query("//div[@class='anime']//h2[@class='title']") as $title) {
    $ended_anime[] = trim($title->nodeValue);
}
print_r($ended_anime);
?>
