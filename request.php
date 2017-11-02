<?php
// accept a term (keyword)
// respond with a value
//$query = $_GET['q'];
$xmldata = '<?xml version="1.0" encoding="UTF-8"?>
<entries>
    <definitiona>
        <name>definition</name>
        <p>A statement of the exact meaning of a word, especially in a dictionary.</p>
        <author>John</author>
    </definitiona>
    
    <definitiona>
        <name>bar</name>
        <p>A place that sells alcholic beverages.</p>
        <author>Mary</author>
    </definitiona>
    
    <definitiona>
        <name>ajax</name>
        <p>Technique which involves the use of javascript and xml (or JSON).</p>
        <author>Kimberly</author>
    </definitiona>
    
    <definitiona>
        <name>html</name>
        <p>The standard markup language for creating web pages and web applications.</p>
        <author>Marshall</author>
    </definitiona>
    
    <definitiona>
        <name>css</name>
        <p>A style sheet language used for describing the presentation of a document written in a markup language.</p>
        <author>Brittani</author>
    </definitiona>
    
    <definitiona>
        <name>javascript</name>
        <p>A lightweight, interpreted programming language with first-class functions that adds interactivity to your website.</p>
        <author>Simone</author>
    </definitiona>
    
    <definitiona>
        <name>php</name>
        <p>A server-side scripting language, and a powerful tool for making dynamic and interactive websites.</p>
        <author>Gavin</author>
    </definitiona>
</entries>';

header('Content-Type: text/xml');
$xmlOutput = new SimpleXMLElement($xmldata);
echo $xmlOutput->asXML();

/*
print "<h3>" . strtoupper($query) . "</h3>";
print "<p>" . $definitiona[$query] . "</p>";
$query = $_GET['q'];
$definition = [
    "definition" => "A statement of the exact meaning of a word, especially in a dictionary.",
    "bar" => "A place that sells alcholic beverages.",
    "ajax" => "Technique which involves the use of javascript and xml (or JSON).",
    "html" => "The standard markup language for creating web pages and web applications.",
    "css" => "A style sheet language used for describing the presentation of a document written in a markup language.",
    "javascript" => "A lightweight, interpreted programming language with first-class functions that adds interactivity to your website.",
    "php" => "A server-side scripting language, and a powerful tool for making dynamic and interactive websites.",
];
print "<h3>" . strtoupper($query) . "</h3>";
print "<p>" . $definition[$query] . "</p>";*/