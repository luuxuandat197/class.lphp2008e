$(document).ready(function () {
    $('#header .navbar-top').load(`../_shared/navbar.html`);

    $.ajax({
        url: `../_shared/product.html`,
        dataType: 'text',
        type: 'get',
        success: function (data) {
            // console.log('success ' + data);
            for (i = 0; i < 3; i++) {
                $('.new_product').append(data);
                $('.hot_trend').append(data);
            }
            $(document).on('click', '.buy-click', function (event) {
                event.preventDefault();
            });
        }
    }).fail(function (jqXHR, textStatus, errorThrown) {
        console.log(jqXHR.toString() + " " + textStatus + " " + errorThrown);
    });

    $('#footer').load(`../_shared/footer.html`);

    // co the copy and paste doan ma sau day vao console cua trinh duyet tren 1 web bat ki
    var locations = `
    location:      ${location}  
    href:          ${location.href}  
    hash:          ${location.hash}  //http://localhost/lphp2008e/do-an-font-end/public/?id=1#part2 -> #part2
    host:          ${location.host}  
    hostname:      ${location.hostname}  
    origin:        ${location.origin}  
    pathname:      ${location.pathname}  
    search:        ${location.search}  
    protocol:      ${location.protocol}  
    port:          ${location.port}  
    domain:        ${document.domain}  
    `;
    console.log(locations);

    //-----------------------------------------------

    $("#side-bar .list-group_hot").load(`../_shared/list-group.html`);
    $("#main .fe_pagination").load('../_shared/pagination.txt');
    $("#banner").load('../_shared/banner.html');
    if ($('#banner')) {
        var link = document.createElement('link');
        link.rel = 'stylesheet';
        link.type = 'text/css';
        link.href = '../assets/css/default-public.css';
        document.getElementsByTagName('HEAD')[0].appendChild(link);
    }

    if($('#main .main-breadcrumb')){
        $('#main .main-breadcrumb').load('../_shared/breadcrumb.html');
    }
});
