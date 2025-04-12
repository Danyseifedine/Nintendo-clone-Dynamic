const loginButton=document.querySelector('.auth-drawer');const authDrawer=document.getElementById('auth-drawer');const closeAuthDrawer=document.getElementById('close-auth-drawer');const authBackdrop=document.getElementById('auth-backdrop');const authTabs=document.querySelectorAll('.auth-tab');const authTabContents=document.querySelectorAll('.auth-tab-content');function openAuthDrawer(){authDrawer.classList.add('open');authBackdrop.classList.remove('hidden');document.body.classList.add('drawer-open')}
function closeDrawer(){authDrawer.classList.remove('open');authBackdrop.classList.add('hidden');document.body.classList.remove('drawer-open')}
function switchTab(tabId){authTabs.forEach(tab=>{if(tab.dataset.tab===tabId){tab.classList.add('active')}else{tab.classList.remove('active')}});authTabContents.forEach(content=>{if(content.id===`${tabId}-tab`){content.classList.remove('hidden')}else{content.classList.add('hidden')}})}
if(loginButton){loginButton.addEventListener('click',function(e){e.preventDefault();openAuthDrawer()})}
if(closeAuthDrawer){closeAuthDrawer.addEventListener('click',closeDrawer)}
if(authBackdrop){authBackdrop.addEventListener('click',closeDrawer)}
authTabs.forEach(tab=>{tab.addEventListener('click',function(){switchTab(this.dataset.tab)})});document.addEventListener('keydown',function(e){if(e.key==='Escape'&&authDrawer.classList.contains('open')){closeDrawer()}});const closeAuthButtons=document.querySelectorAll('.close-auth');closeAuthButtons.forEach(button=>{button.addEventListener('click',function(){})});if(authBackdrop){authBackdrop.addEventListener('click',function(){})}