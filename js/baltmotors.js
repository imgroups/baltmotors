/* �������� �������� ����*/

var h_hght = 30; // ������ �����
  var h_mrg = 0;     // ������ ����� ����� ��� �� �����
  $(function(){
   $(window).scroll(function(){
      var top = $(this).scrollTop();
      var elem = $('.navbar-fixed-top');
      if (top+h_mrg < h_hght) {
       elem.css('top', (h_hght-top));
      } else {
       elem.css('top', h_mrg);
      }
    });
  });