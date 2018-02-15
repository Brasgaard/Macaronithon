<?php 
$startYear = 2018;
$thisYear = date('Y');
if ($thisYear > $startYear) {
    $thisYear = date('y');
    $copyright = "$startYear&dash;$thisYear";
} else {
    $copyright = $startYear;
}
 ?>
<footer class="footer"><p class="footer--copyright" role="contentinfo">© <?php echo $copyright ?> Macaronithon. Alexander Brasgaard van Straaten, Linas Mackonis Sean Ryg C. & Maciej Woźniak</p>
</footer>

</body>

</html>