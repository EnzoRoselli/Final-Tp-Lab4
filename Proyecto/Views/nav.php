<nav class="nav-container">
  <a href="./Home.php" class="nav-title">
    <h2>CinemApp</h2>
  </a>
  <form action="../Controllers/searchMovieController.php" method="GET">
    <div class="search-wrapper active">
      <div class="input-holder">
        <input name="title" type="text" class="search-input" placeholder="Type to search" />
        <button class="search-icon">
      <img src="./img/search-32.png" alt=""></button>
      </div>

    </div>
  </form>

  <form action="../views/SearchMoviesWithFiltersController.php">
      <button class="btn btn-light mr-4" id="btn-filter">Browse</button>
  </form>

  <form action="../views/AdminCine.php">
      <button class="btn btn-light mr-4" id="btn-cine">Cine</button>
  </form>

  <div class="logSign">
    <form action="../Login/LoginSignup.php">
        <button class="btn btn-light mr-4" id="btn-Log-in">Log-in | Sign-up</button>
    </form>
  </div>
  
</nav>