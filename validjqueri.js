function Ascending(a,b) {
    if (a < b) return -1;
    if (a > b) return 1;
    return 0;
}
$('th a').click(function() {
    var $th = $(this).closest('th');
    var column = $th.index(); // Todo: url.Sort
    var $table = $th.closest('table');
    var rows = $table.find('tbody > tr').get();
    rows.sort(function(rowA,rowB) {
        if (column == 2) {
            var keyA = $(rowA).children('td').eq(column).children('input').val().toUpperCase();
            var keyB = $(rowB).children('td').eq(column).children('input').val().toUpperCase();
        } else {
            var keyA = $(rowA).children('td').eq(column).text().toUpperCase();
            var keyB = $(rowB).children('td').eq(column).text().toUpperCase();
        }
        return Ascending(keyA,keyB);
    });
    $.each(rows, function(index,row) {
        $table.children('tbody').append(row);
    });
    return false;
});