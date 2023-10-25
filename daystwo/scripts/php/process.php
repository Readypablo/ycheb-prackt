<?php 
session_start();

require("connect.php");
// Проверяем, был ли отправлен запрос POST
if (isset($_POST["sorting"])) {
    header("Location: ../../catalog.php");
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
      case 'lt_1500':
        $priceFilter = 'WHERE Price < 1500';
        break;
      case 'gt_1500':
        $priceFilter = 'WHERE Price > 1500';
        break;
      default:
        $priceFilter = '';
        break;
    }
  
    // Определяем условия фильтрации по скорости
    $speedFilter = '';
    switch ($speedFilterOption) {
      case 'lte_60':
        $speedFilter = 'AND Speed <= 60';
        break;
      case 'gt_60':
        $speedFilter = 'AND Speed > 60';
        break;
      default:
        $speedFilter = '';
        break;
    }
    
} 


?>