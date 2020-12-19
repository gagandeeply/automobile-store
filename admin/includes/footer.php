 <footer class="footer hidden-xs-down">
            <p>© Kavity. All rights reserved.</p>
        </footer>

        <script type="text/javascript" src="/admin/vendors/bower_components/jquery/dist/jquery.min.js"></script>
        <script type="text/javascript" src="/admin/vendors/bower_components/popper.js/dist/umd/popper.min.js"></script>
        <script type="text/javascript" src="/admin/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="/admin/vendors/bower_components/jquery.scrollbar/jquery.scrollbar.min.js"></script>
        <script type="text/javascript" src="/admin/vendors/bower_components/jquery-scrollLock/jquery-scrollLock.min.js"></script>
        <script type="text/javascript" src="/admin/vendors/bower_components/remarkable-bootstrap-notify/dist/bootstrap-notify.min.js"></script>

        <script type="text/javascript">

            function notify(type, message){

                $.notify({
                    icon: 'fa fa-check',
                    title: '',
                    message: message,
                    url: ''
                },{
                    element: 'body',
                    type: type,
                    allow_dismiss: true,
                    placement: {
                        from: 'top',
                        align: 'right'
                    },
                    offset: {
                        x: 20,
                        y: 20
                    },
                    spacing: 10,
                    z_index: 1031,
                    delay: 2500,
                    timer: 1000,
                    url_target: '_blank',
                    mouse_over: false,
                    animate: {
                        enter: 'animated bounceIn',
                        exit: 'animated bounceOu'
                    },
                    template: '<div data-notify="container" class="alert alert-dismissible alert-{0} alert--notify" role="alert">' +
                        '<span data-notify="icon"></span> ' +
                        '<span data-notify="title">{1}</span> ' +
                        '<span data-notify="message">{2}</span>' +
                        '<div class="progress" data-notify="progressbar">' +
                        '<div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
                         '</div>' +
                         '<a href="{3}" target="{4}" data-notify="url"></a>' +
                        '<button type="button" aria-hidden="true" data-notify="dismiss" class="close"><span>×</span></button>' +
                    '</div>'
                });
            }

            $(document).ready(function(){


                var now = new Date();

                const monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
                var days = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];

                $('.date').html( now.getFullYear() + ' ' + monthNames[now.getMonth()] + ' ' + now.getDate() + ' ' + days[now.getDay()] );

                for (var i = 0; i < document.links.length; i++) {
                    var thisNode = document.links[i];
                    if (thisNode.href == document.URL) {
                        thisNode.parentElement.classList.add('navigation__active');
                        if( $('li.navigation__active').parents('ul').hasClass('navigation__sub') ) {
                            $('li.navigation__active').parents('ul').show();
                            ($('li.navigation__active').parents('ul')).parents('li').addClass('navigation__active');
                        } 
                    }
                }

                function idleTimer() {
                    var t;
                    //window.onload = resetTimer;
                    window.onmousemove = resetTimer; // catches mouse movements
                    window.onmousedown = resetTimer; // catches mouse movements
                    window.onclick = resetTimer;     // catches mouse clicks
                    window.onscroll = resetTimer;    // catches scrolling
                    window.onkeypress = resetTimer;  //catches keyboard actions

                    function logout() {
                    
                        $.ajax({
                            url     : "/admin/clear/session",
                            type    : 'GET',
                            success : function(response) {
                                notify('danger', "session expair" );
                                return; 
                            }
                        });
                    }

                    function resetTimer() {
                        clearTimeout(t);
                        // expair after 6 hours 
                        t = setTimeout(logout, 2.16e+7);  // time is in milliseconds (1000 is 1 second)
                    }
                }
                idleTimer();
            });


        </script>

  <script type="text/javascript" src="/admin/vendors/bower_components/flot/jquery.flot.js"></script>
  <script type="text/javascript" src="/admin/vendors/bower_components/flot.time/jquery.flot.time.min.js"></script>
  <script type="text/javascript" src="/admin/vendors/bower_components/flot/jquery.flot.resize.js"></script>

  <script type="text/javascript">
  	$(document).ready(function(){

  		Date.prototype.getWeek = function (dowOffset) {

  		dowOffset = typeof(dowOffset) == 'int' ? dowOffset : 0;
  		var newYear = new Date(this.getFullYear(),0,1);
  		var day = newYear.getDay() - dowOffset;
  		day = (day >= 0 ? day : day + 7);
  		var daynum = Math.floor((this.getTime() - newYear.getTime() - 
  		(this.getTimezoneOffset()-newYear.getTimezoneOffset())*60000)/86400000) + 1;
  		var weeknum;
  		if(day < 4) {
  			weeknum = Math.floor((daynum+day-1)/7) + 1;
  			if(weeknum > 52) { 
  				nYear = new Date(this.getFullYear() + 1,0,1);
  				nday = nYear.getDay() - dowOffset;
  				nday = nday >= 0 ? nday : nday + 7;
  				weeknum = nday < 4 ? 1 : 53;
  			}
  		}
  		else {
  			weeknum = Math.floor((daynum+day-1)/7);
  		}
  		return weeknum;
  	};

  		var dayOfMonth = ["Jan", "Feb", "Mar", "Apr", "May", "June", "July", "Aug", "Sep", "Oct", "Nov", "Dec"];
	
	

  		function gd(year, month, day) {
  			return new Date(year, month, day).getTime();
  		}

  		var userStatics = JSON.parse('[{"created_at":"Jan 2019","users":1},{"created_at":"Jun 2019","users":1},{"created_at":"Jul 2019","users":1},{"created_at":"Jul 2019","users":1},{"created_at":"Jul 2019","users":1},{"created_at":"Jul 2019","users":1},{"created_at":"Jul 2019","users":1},{"created_at":"Jul 2019","users":1},{"created_at":"Jul 2019","users":1},{"created_at":"Jul 2019","users":1},{"created_at":"Aug 2019","users":1},{"created_at":"Sep 2019","users":1},{"created_at":"Sep 2019","users":1},{"created_at":"Sep 2019","users":1},{"created_at":"Sep 2019","users":1},{"created_at":"Sep 2019","users":1},{"created_at":"Sep 2019","users":1},{"created_at":"Sep 2019","users":1},{"created_at":"Sep 2019","users":1},{"created_at":"Sep 2019","users":1},{"created_at":"Sep 2019","users":1},{"created_at":"Sep 2019","users":1},{"created_at":"Oct 2019","users":1},{"created_at":"Oct 2019","users":1},{"created_at":"Oct 2019","users":1},{"created_at":"Oct 2019","users":1},{"created_at":"Nov 2019","users":1},{"created_at":"Dec 2019","users":1},{"created_at":"Oct 2020","users":1},{"created_at":"Oct 2020","users":1},{"created_at":"Oct 2020","users":1},{"created_at":"Oct 2020","users":1},{"created_at":"Oct 2020","users":1}]');
  		var userStatistics = [];

  		for (var i = 0; i < userStatics.length; i++) {
  			var date = new Date(userStatics[i].created_at);
  			userStatistics.push([gd(date.getFullYear(), date.getDate()), userStatics[i].users]);			
  		}

  		var orderStatics = JSON.parse('[{"created_at":"Jul 2019","orders":1},{"created_at":"Jul 2019","orders":1},{"created_at":"Jul 2019","orders":1},{"created_at":"Jul 2019","orders":1},{"created_at":"Jul 2019","orders":1},{"created_at":"Jul 2019","orders":1},{"created_at":"Jul 2019","orders":1},{"created_at":"Jul 2019","orders":1},{"created_at":"Jul 2019","orders":1},{"created_at":"Jul 2019","orders":1},{"created_at":"Jul 2019","orders":1},{"created_at":"Aug 2019","orders":1},{"created_at":"Aug 2019","orders":1},{"created_at":"Aug 2019","orders":1},{"created_at":"Aug 2019","orders":1},{"created_at":"Aug 2019","orders":1},{"created_at":"Aug 2019","orders":1},{"created_at":"Aug 2019","orders":1},{"created_at":"Aug 2019","orders":1},{"created_at":"Sep 2019","orders":1},{"created_at":"Sep 2019","orders":1},{"created_at":"Sep 2019","orders":1},{"created_at":"Sep 2019","orders":1},{"created_at":"Sep 2019","orders":1},{"created_at":"Sep 2019","orders":1},{"created_at":"Sep 2019","orders":1},{"created_at":"Sep 2019","orders":1},{"created_at":"Sep 2019","orders":1},{"created_at":"Nov 2019","orders":1},{"created_at":"Nov 2019","orders":1},{"created_at":"Nov 2019","orders":1},{"created_at":"Nov 2019","orders":1},{"created_at":"Nov 2019","orders":1},{"created_at":"Nov 2019","orders":1},{"created_at":"Nov 2019","orders":1},{"created_at":"Nov 2019","orders":1}]');
  		var orderStatistics = [];

  		for (var i = 0; i < orderStatics.length; i++) {
  			var date = new Date(orderStatics[i].created_at);
  			orderStatistics.push([gd(date.getFullYear(), date.getMonth(), date.getDate()), orderStatics[i].orders]);			
  		}

  		var usersLineChartData = [
  			{
  				color: 'rgba(255,255,255,0.8)',
  				lines: {
  					show: true,
  					lineWidth: 0.1,
  					fill: 1,
  					fillColor: {
  						colors: ['rgba(255,255,255,0.01)', '#fff']
  					} 
  				},
  				data: userStatistics
  			}
  		];

  		// Main
  		var usersLineChartOptions = {
  			series: {
  				shadowSize: 0,
  				bars: {
  					show: true,
  					barWidth: 0.075,
  					fill: 1,
  					lineWidth: 0
  				}
  			},
  			grid: {
  				borderWidth: 1,
  				borderColor: 'rgba(255,255,255,0.1)',
  				show: true,
  				hoverable: true,
  				clickable: true
  			},
  			xaxis: {
  				tickColor: 'rgba(255,255,255,0.1)',
  				mode: "time",
  				tickFormatter: function (val, axis) {
  			        return dayOfMonth[new Date(val).getMonth()];
  				},
  				font: {
  					lineHeight: 13,
  					style: 'normal',
  					color: 'rgba(255,255,255,0.75)',
  					size: 11
  				}
  			},
  			yaxis: {
  				tickColor: 'rgba(255,255,255,0.1)',
  				tickDecimals: 0,
  				font: {
  					lineHeight: 13,
  					style: 'normal',
  					color: 'rgba(255,255,255,0.75)',
  					size: 11
  				},
  				min: 0
  			},
  			legend:{
  				container: '.users-line-legends--curved',
  				backgroundOpacity: 0.5,
  				noColumns: 0,
  				lineWidth: 0,
  				labelBoxBorderColor: 'rgba(255,255,255,0)'
  			}
  		};

  		$.plot($('.users-line'), usersLineChartData, usersLineChartOptions);

  		var ordersLineChartData = [
  			{
  				color: 'rgba(255,255,255,0.8)',
  				lines: {
  					show: true,
  					lineWidth: 0.1,
  					fill: 1,
  					fillColor: {
  						colors: ['rgba(255,255,255,0.01)', '#fff']
  					}
  				},
  				data: orderStatistics
  			}
  		];

  		// Main
  		var ordersLineChartOptions = {
  			series: {
  				shadowSize: 0,
  				bars: {
  					show: true,
  					barWidth: 0.075,
  					fill: 1,
  					lineWidth: 0
  				}
  			},
  			grid: {
  				borderWidth: 1,
  				borderColor: 'rgba(255,255,255,0.1)',
  				show: true,
  				hoverable: true,
  				clickable: true
  			},
  			xaxis: {
  				tickColor: 'rgba(255,255,255,0.1)',
  				mode: "time",
  				tickFormatter: function (val, axis) {
  			        return dayOfMonth[new Date(val).getMonth()];
  				},
  				font: {
  					lineHeight: 13,
  					style: 'normal',
  					color: 'rgba(255,255,255,0.75)',
  					size: 11
  				}
  			},
  			yaxis: {
  				tickColor: 'rgba(255,255,255,0.1)',
  				tickDecimals: 0,
  				font: {
  					lineHeight: 13,
  					style: 'normal',
  					color: 'rgba(255,255,255,0.75)',
  					size: 11
  				},
  				min: 0
  			},
  			legend:{
  				container: '.orders-line-legends--curved',
  				backgroundOpacity: 0.5,
  				noColumns: 0,
  				lineWidth: 0,
  				labelBoxBorderColor: 'rgba(255,255,255,0)'
  			}
  		};

  		$.plot($('.orders-line'), ordersLineChartData, ordersLineChartOptions);
  	});
  </script>
  
        <script type="text/javascript" src="/admin/js/app.min.js"></script>
    

<div style="left: -1000px; overflow: scroll; position: absolute; top: -1000px; border: none; box-sizing: content-box; height: 200px; margin: 0px; padding: 0px; width: 200px;"><div style="border: none; box-sizing: content-box; height: 200px; margin: 0px; padding: 0px; width: 200px;"></div></div></body></html>