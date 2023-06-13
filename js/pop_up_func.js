 $(window).on('load',function() {
                new $.popup({                
                    title       : '',
                    content         : '<div img src="img/vacation2.jpg" class="small-dialog-header"><h3><b>Active su <span> Kaaxtik </span> Travel Card</b></h3></div><div class="row"><div class="col-md-6"></div><div class="col-md-6"><div class="form_title"><h3>Ingrese su Codigo</h3></div><div class="step"><div class="row"><div class="col-sm-10"><div class="form-group"><label>Codigo de Activación</label><input type="text" class="form-control" id="firstname_booking" name="firstname_booking"><small><font color="#000000">Su código de activación se encuentra en el reverso de su tarjeta o al interior de su certificado.</font></small></div></div></div><a href="activar.html" class="btn_1 green medium">Activar Ahora</a></div></div></div>', 
					html: true,
					autoclose   : false,
					closeOverlay:true,
					closeEsc: true,
					buttons     : false,
					background: 'img/vacation2.jpg',
                });
            });