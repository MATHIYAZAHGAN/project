function g4cSF(){var e=new URL(window.location.href),c=new URLSearchParams(e.search),s=c.get("g4c_cp_sessid");return s&&(localStorage.setItem("g4c_cp_sessid",s),c.delete("g4c_cp_sessid"),ps=c.toString(),history.pushState(null,null,e.pathname+(ps?"?":"")+ps)),localStorage.getItem("g4c_cp_sessid")}function g4cCI(){var e=document.createElement("script"),c=g4cSF();e.src="//swopstore.com/wrapper.php?method=shop_scripts&shopId=1060"+(c?"&g4c_cp_sessid="+c:""),document.head.appendChild(e)}g4cCI();