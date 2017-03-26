var ___tagScript = '(?:<script.*?>)((\n|\r|.)*?)(?:<\/script>)'; 
//	var ___tagScript = '(?:<script.*?>)((\n|\r|.)*?)(?:<\/script>)'; 
        /** 
        * Eval script fragment 
        * @return String 
        */

        String.prototype.___evalScript = function() 
        { 
               return (this.match(new RegExp(___tagScript, 'img')) || []).___evalScript(); 
			   //return '';
			  
        }; 
        /** 
        * strip script fragment 
        * @return String 
        */
		

        String.prototype.stripScript = function() 
        { 
                return this.replace(new RegExp(___tagScript, 'img'), ''); 
        }; 
        /** 
        * extract script fragment 
        * @return String 
        */ 

        String.prototype.extractScript = function() 
        { 
                var matchAll = new RegExp(___tagScript, 'img'); 
                return (this.match(matchAll) || []); 
        }; 
        /** 
        * Eval scripts 
        * @return String 
        */

        Array.prototype.___evalScript = function(extracted) 
        { 
                var s=this.map_ajax(function(sr){ 
                         var sc=(sr.match(new RegExp(___tagScript, 'im')) || ['', ''])[1]; 
                         if(window.execScript){ 
                              window.execScript(sc); 
                         } 
                        else 
                       { 
                           window.setTimeout(sc,0); 
                        } 
                }); 
                return true; 
        }; 
        /** 
        * map_ajax array elements 
        * @param {Function} fun 
        * @return Function 
        */ 

        Array.prototype.map_ajax = function(fun) 
        { 
                if(typeof fun!=="function"){return false;} 
                var i = 0, l = this.length; 
                for(i=0;i<l;i++) 
                { 
                        fun(this[i]); 
                } 
                return true; 
        };  
		/**/
		
//Ejemplos de uso
/*		
		Interprete normal
Código:
Texto blabla
<script type='text/javscript'>alert('algo');</script>
Otro texto blabla
Código PHP:
        var scs=myAjax.responseText.extractScript();    //capturamos los scripts 
        myDivUoTroLugar.innerHTML=myAjax.responseText.stripScript();    //eliminamos los scripts... ya son innecesarios 
        scs.evalScript();       //ahora si, comenzamos a interpretar todo  

		
		
Ahora bien, para interpretar archivos javascript
Código:
		<script type='text/javascript'>alert('algo');</script>
		Texto blabla
		<script type='text/javascript' src="algo.js"></script>
		Otro texto blabla
Se debe hacer.

Código PHP:
        var scs=myAjax.responseText.extractScript();    //capturamos los scripts 
        myDivUoTroLugar.innerHTML=myAjax.responseText 
        scs.evalScript();       //ahora si, comenzamos a interpretar todo 
*/