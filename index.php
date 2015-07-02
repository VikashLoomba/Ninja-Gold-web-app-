<? session_start();

if (!isset($_SESSION['user_gold'])) {
      $_SESSION['user_gold'] = 0;
    }
if (!isset($_SESSION['text_area'])) {
      $_SESSION['text_area'] = array();
    }
                
?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ninja Gold!</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="css/main.css" />
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>
    <div class="row">
      <div class="small-12 small-centered column">
        <fieldset>
          <legend>Your Gold: 
            <? if (isset($_SESSION['user_gold'])) {
                  echo $_SESSION['user_gold'];
          }
          else{
            echo $_SESSION['user_gold'] = 0;
          }  ?></legend>
          <div class="row">
            <div class="small-12 small-centered column">
              <div class="small-3 column text-center boxed_col">
                <form method="post" action="process.php">
                  <h1>Farm</h1>
                  <p>Earns 10-20 gold</p>
                  <input type="submit" name="farm" value="Find Gold" class="button success">
                </form>
              </div>
              <div class="small-3 column text-center boxed_col">
                <form method="post" action="process.php">
                  <h1>Cave</h1>
                  <p>Earns 5-10 gold</p>
                  <input type="submit" name="cave" value="Find Gold" class="button success">
                </form>
              </div>
              <div class="small-3 column text-center boxed_col">
                <form method="post" action="process.php">
                  <h1>House</h1>
                  <p>Earns 2-5 gold</p>
                  <input type="submit" name="house" value="Find Gold" class="button success">
                </form>
              </div>
              <div class="small-3 column text-center boxed_col">
                <form method="post" action="process.php">
                  <h1>Casino!</h1>
                  <p>Earns/takes 0-50 gold</p>
                  <input type="submit" name="casino" value="Find Gold" class="button success">
                </form>
              </div>
            </div>
          </div>
          <fieldset>
            <legend>Activity Log:</legend>
            <div class="row">
              <div class="small-12 small-centered column">
                <textarea>
                  <?php
                    for ($i = count($_SESSION['text_area']) - 1; $i >= 0 ; $i--) { ?>
                       <?= $_SESSION['text_area'][$i] ?> 

                  <?php } ?>
                  
               </textarea>
              </div>
            </div>
          </fieldset>
        </fieldset>
      </div>
    </div>
    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
