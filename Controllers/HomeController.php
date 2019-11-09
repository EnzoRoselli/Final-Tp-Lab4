<?php
    namespace Controllers;

    use DAO\MoviesDAO as MoviesDAO;
    use DAO\GenresDAO as GenresDAO;
    use Controllers\ShowtimeController as ShowtimeController;

    class HomeController
    {
        private $moviesDAO;
        private $genresDAO;
        private $ShowtimeController;

        public function __construct()
        {
            $this->genresDAO = new GenresDAO();
            $this->moviesDAO = new MoviesDAO();
            $this->ShowtimeController=new ShowtimeController();
        }

        public function Index($message = "")
        {
            // Proceso
            require_once(VIEWS."/header.php");
            $this->showHome();
            require_once(VIEWS."/footer.php");
        }

        public function showHome()
        {   
           
            $this->ShowtimeController->updateShowtimes();
            $moviesList = $this->moviesDAO->getAll();  
            $principalGenresByMovie = array();

            foreach ($moviesList as $movie) {
                
                $genres = $this->genresDAO->getGenresByMovieId($movie->getId());

                array_push($principalGenresByMovie, $genres[0]);
            }
            
            //require_once(VIEWS.'/lastArrival.php');
            //require_once(VIEWS.'/Slider.php');
            
            require_once(VIEWS."/MovieGrid.php");
        }

        public static function showMain($message = "")
        {
            // Proceso
            require_once(VIEWS."/header.php");
            $this->showHome();
            require_once(VIEWS."/footer.php");
        }
        
    }
?>