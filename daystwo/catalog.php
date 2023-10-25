<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/catalog.css">
</head>
<body>
    <?php 
        session_start();
        require ('elements/header.php');
    ?>
        <form method="post" action="" class="filters-contain">
    <label for="sort">Сортировка:</label>
    <select name="sort" id="sort">
        <option value="price_asc"  >По возрастанию цены</option>
        <option value="price_desc"  >По убыванию цены</option>
        <option value="speed_asc"  >По возрастанию скорости</option>
        <option value="speed_desc"  >По убыванию скорости</option>
    </select>
  
    <label for="filter_price">Фильтрация по цене:</label>
    <select name="filter_price" id="filter_price">
    <option value=""></option>
        <option value="less_1500" >Цена < 1500</option>
        <option value="more_1500" >Цена > 1500</option>
    </select>
  
    <label for="filter_speed">Фильтрация по скорости:</label>
    <select name="filter_speed" id="filter_speed">
        <option value=""></option>
        <option value="less_60" >Скорость <= 60</option>
        <option value="more_60">Скорость > 60</option>
    </select>

    <input type="submit" value="Выполнить" name="sorting">
        </form>
    <div class="main-content">
    <?php 
    require('scripts/php/connect.php');
    $sortOption = isset($_POST['sort']) ? $_POST['sort'] : 'price_asc';
    $priceFilterOption = isset($_POST['filter_price']) ? $_POST['filter_price'] : '';
    $speedFilterOption = isset($_POST['filter_speed']) ? $_POST['filter_speed'] : '';
    if (isset($_POST["sorting"])) {
        // Получаем выбранные значения из формы
        $sortOption = $_POST['sort'];
        $priceFilterOption = $_POST['filter_price'];
        $speedFilterOption = $_POST['filter_speed'];
        $_SESSION['sortOption'] = $sortOption;
        $_SESSION['priceFilterOption'] = $priceFilterOption;
        $_SESSION['speedFilterOption'] = $speedFilterOption;
        // Определяем условия сортировки
        $orderBy = '';
        switch ($sortOption) {
          case 'price_asc':
            $orderBy = 'ORDER BY Price ASC';
            break;
          case 'price_desc':
            $orderBy = 'ORDER BY Price DESC';
            break;
          case 'speed_asc':
            $orderBy = 'ORDER BY Speed ASC';
            break;
          case 'speed_desc':
            $orderBy = 'ORDER BY Speed DESC';
            break;
          default:
            $orderBy = 'ORDER BY Price ASC';
            break;
        }
      
        // Определяем условия фильтрации по цене
        $priceFilter = '';
        switch ($priceFilterOption) {
          case 'less_1500':
            $priceFilter = 'WHERE Price < 1500 ';
            break;
          case 'more_1500':
            $priceFilter = 'WHERE Price > 1500 ';
            break;
          default:
            $priceFilter = '';
            break;
        }
      
        // Определяем условия фильтрации по скорости
        $speedFilter = '';
        switch ($speedFilterOption) {
          case 'less_60':
            $speedFilter = 'AND Speed <= 60 ';
            break;
          case 'more_60':
            $speedFilter = 'AND Speed > 60 ';
            break;
          default:
            $speedFilter = '';
            break;
        }
         $sql2 = "SELECT * FROM Mopeds $priceFilter $speedFilter $orderBy";
         $result = $conn->query($sql2);
    if ($result ->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
    echo '
    <div class="catalog-item">
    <img src="'.$row['Image'].'" alt="">
    <div class="data-item">
        <div class="price">
         <h3>'.$row['Name'].'</h3>
         <h3>'.$row['Price'].'</h3>
    </div>
   <div class="speed">
       <h3>Максимальный<br>разгон</h3>
       <h3>'.$row['Speed'].' км/ч</h3>
   </div>
    </div>';
    if (isset($_SESSION["userData"])) { 
        echo '
        <form action="scripts/php/paneling.php" method="post">
        <input type="hidden" value="'.$row['id'].'" name="moped_id">
        <input type="submit" value="Арендовать">
        </form>';
    } else {
        echo '
        <form action="login.php" method="post">
        <input type="hidden" value="'.$row['id'].'" name="moped_id">
        <input type="submit" value="Арендовать">
        </form>';
    }
    echo '
</div>
';
} 
    } else {
        echo '<h2> Ничего не найдено </h2>';
    }
    
    }
    ?>

</body>
</html>