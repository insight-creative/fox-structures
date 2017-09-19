jQuery(function($) {

  // Widon't, removes widows in text
  $('h1,h2,h3,li,p').each(function() {
    $(this).html($(this).html().replace(/\s([^\s<]+)\s*$/,'&nbsp;$1'));
  });
  
});
