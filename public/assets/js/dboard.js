/**
 * Created by pijush on 18-04-2017.
 */
$(document).ready(function(){
    $('a[data-toggle="tab"]').on('show.bs.tab', function(e) {
        localStorage.setItem('activeTab', $(e.target).attr('href'));
    });
    var activeTab = localStorage.getItem('activeTab');
    if(activeTab){
        $('#rechargeTab a[href="' + activeTab + '"]').tab('show');
    }
});
