    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
            <canvas id="chart0"></canvas>
            <canvas id="chart1"></canvas>
        <form action="index.php" method="get">
            <p style="margin-left: 20%; font-weight: 600;">
                표시 개수 
                <input type="hidden" name="ip" value=<?=$ip?>>
                <input type="number" name="n" value=<?=$num?>> 
                <input type="submit" value="검색">
            </p>
        </form>