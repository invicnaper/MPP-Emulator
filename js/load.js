            function xmlhttpPost(strURL) {
                var xmlHttpReq = false;
                var self = this;
                // Mozilla/Safari
                if (window.XMLHttpRequest) {
                    self.xmlHttpReq = new XMLHttpRequest();
                }
                // IE
                else if (window.ActiveXObject) {
                    self.xmlHttpReq = new ActiveXObject("Microsoft.XMLHTTP");
                }
                self.xmlHttpReq.open('POST', strURL, true);
                self.xmlHttpReq.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                self.xmlHttpReq.onreadystatechange = function() {
                    if (self.xmlHttpReq.readyState == 4) {
                        updatepage(self.xmlHttpReq.responseText);
                    }
                }
                self.xmlHttpReq.send(getstring());
            }

            function getstring() {
                var form     = document.forms['Test'];
                var cmd = form.cmd.value;
                squery = 'cmd=' + escape(cmd);  // NOTE: no '?' before querystring
                return squery;
            }

            function updatepage(str){
                document.getElementById("sentback").innerHTML = str;
            }
