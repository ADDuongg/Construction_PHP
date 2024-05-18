<?php
function generatePagination($from, $to, $totalItem, $totalRow, $next, $prev, $page, $limit) {
    $currentPage = intval($page); 
    ?>
    <div class="w-100 d-flex justify-content-between" style="min-width: 100vh">
        <div>Show <?php echo $from ?> to <?php echo $to ?> of <?php echo $totalItem ?></div>
        <ul class="pagination">
            <?php if ($totalRow >= 1): ?>
                <li class="page-item"><a class="page-link" href="contract.php?page=<?php echo $prev ?>&limit=<?php echo $limit ?>">Previous</a></li>
                <?php for ($i = 1; $i <= $totalRow; $i++): ?>
                    <li class="page-item <?php echo ($i === $currentPage) ? 'active' : '' ?>"><a class="page-link" href="contract.php?page=<?php echo $i ?>&limit=<?php echo $limit ?>"><?php echo $i ?></a></li>
                <?php endfor ?>
                <li class="page-item"><a class="page-link" href="contract.php?page=<?php echo $next ?>&limit=<?php echo $limit ?>">Next</a></li>
            <?php endif ?>
        </ul>
    </div>
    <?php
}
?>
