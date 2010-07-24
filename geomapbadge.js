//show me love to the Module Pattern
var geomapbadge = function(){

    var elem,location;
  
    function init(o) {

      var isMSIE = /*@cc_on!@*/false;     

          elem = document.getElementById(o.element);

          location = o.location;

          if(elem && location) {

             var yql = "use 'http://thinkphp.ro/apps/geo/geomap/geomap.xml' as g;select * from g where place='"+location+"'";

             if(isMSIE === false) {

                 yql += ' and type="data"'; 
             }
                 yql += ' and location="'+o.showlist+'"';

                 new YQLQuery(yql,geomapbadge.seed).fetch();  
          }
    };

    function seed(o) {
           //if we have results then go ahead
           if(o.results) {
                //get the data
                var r = o.results[0];
                //if we have an error then begin
                if(r.indexOf('<error') !== -1) {
                  //remove from string <error> and </error>
                  var clean = r.replace(/<\/?error[^>]*>/g,'');
                  elem.innerHTML = '<h2 class="error">'+clean+'</h2>';  
                } else {
                  elem.innerHTML = r;
                }
           }        
    };
 
  return{init: init, seed: seed};
}();
