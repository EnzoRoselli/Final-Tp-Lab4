<?php

require_once("../config/autoload.php");
use Config\Autoload as Autoload;
Autoload::Start();

use DAO\InfoAPI\genresAPI as genresAPI;
use DAO\InfoAPI\moviesAPI as moviesAPI;

function moviesDateFilter($movieFunctions,$date)
{
    $result=array();
    for ($i=0; $i < count($movieFunctions); $i++) { 
        if ($movieFunctions[$i]->getDate()==$date) {
         array_push($result,$movieFunctions[$i]);
        }
    }
    return $result;
}

if (isset($_GET['genres']) && isset($_GET['date'])) {  
    
   
$movies=moviesAPI::getMoviesFromApi();
$MovieGenres=genresAPI::getGenres();
$Genres=$_GET['genres'];
$Date=$_GET['date'];

//SE LLAMA A MoviesDateFilter()
//y luego buscamos de las peliculas que tomo la funcion,cuales tienen los generos que vino dle get
//$moviesWithGenres=moviesAPI::getMovieForGenres($Genres,$movies);
 //Todas las peliculas con los generos buscados
//Debemos buscar aquellas peliculas que concuerden con la fecha ingresada, ya la tenemos en la variable Date

}else if(isset($_GET['genres'])){
    $movies=moviesAPI::getMoviesFromApi();
    $MovieGenres=genresAPI::getGenres();
    $Genres=$_GET['genres'];  
    $moviesWithGenres=moviesAPI::getMovieForGenres($Genres,$movies);//Retornaria estas peliculas
    var_dump($moviesWithGenres);
}else if (isset($_GET['date'])) {
    $Date=$_GET['date'];
    //Tomar todas aqullas peliculas de la fecha recibida 
    //Osea llamar a MoviesDateFilter()
}




?>