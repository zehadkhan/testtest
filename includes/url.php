<script async>
    function hideIF() {	
        document.getElementById('IF').style.visibility = '';
    }
    function getSaleInfo() {
        document.getElementById('st_code').style.visibility = 'hidden';
        document.getElementById('st_code').innerHTML='<iframe src="https://vison.ositracker.com/sales/salejs/amount:0/transaction:B" alt="" id=IF width=50 height=50 border="0" frameborder="0" onload="hideIF()">';
   } 
   window.onload = getSaleInfo;
</script>