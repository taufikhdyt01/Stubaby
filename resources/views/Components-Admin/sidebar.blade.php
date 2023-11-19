<style>
  #sidebar {
    transition: ease-in-out all .3s;
    z-index: 9999;
  }
        
  #sidebar span {
    opacity: 0;
    position: absolute;
    transition: ease-in-out all .1s;
  }
        
  #sidebar:hover {
    width: 150px;
    box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
  }
        
  #sidebar:hover span {
    opacity: 1;
  }
</style>
<div id="sidebar" class="h-screen w-16 menu bg-white text-white px-4 flex items-center nunito static fixed shadow">
  <ul class="list-reset">
    <li class="my-2 md:my-0" style="margin-bottom: 10px;">
      <a href="/admin/dashboard" class="block py-2 md:py-4 pl-2 align-middle text-gray-600 no-underline hover:text-indigo-400 flex items-center">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8">
          <path d="M11.47 3.84a.75.75 0 011.06 0l8.69 8.69a.75.75 0 101.06-1.06l-8.689-8.69a2.25 2.25 0 00-3.182 0l-8.69 8.69a.75.75 0 001.061 1.06l8.69-8.69z" />
          <path d="M12 5.432l8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 01-.75-.75v-4.5a.75.75 0 00-.75-.75h-3a.75.75 0 00-.75.75V21a.75.75 0 01-.75.75H5.625a1.875 1.875 0 01-1.875-1.875v-6.198a2.29 2.29 0 00.091-.086L12 5.43z" />
        </svg>
        <span class="pl-10 text-sm">Database Anak</span>
      </a>
    </li>
    
    <li class="my-2 md:my-0" style="margin-bottom: 10px;">
      <a href="/admin/Admin-Konten" class="block py-2 md:py-4 pl-2 align-middle text-gray-600 no-underline hover:text-indigo-400 flex items-center">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8">
          <path fill-rule="evenodd" d="M4.125 3C3.089 3 2.25 3.84 2.25 4.875V18a3 3 0 003 3h15a3 3 0 01-3-3V4.875C17.25 3.839 16.41 3 15.375 3H4.125zM12 9.75a.75.75 0 000 1.5h1.5a.75.75 0 000-1.5H12zm-.75-2.25a.75.75 0 01.75-.75h1.5a.75.75 0 010 1.5H12a.75.75 0 01-.75-.75zM6 12.75a.75.75 0 000 1.5h7.5a.75.75 0 000-1.5H6zm-.75 3.75a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5H6a.75.75 0 01-.75-.75zM6 6.75a.75.75 0 00-.75.75v3c0 .414.336.75.75.75h3a.75.75 0 00.75-.75v-3a.75.75 0 00-.75-.75H6z" clip-rule="evenodd" />
          <path d="M18.75 6.75h1.875c.621 0 1.125.504 1.125 1.125V18a1.5 1.5 0 01-3 0V6.75z" />
        </svg>
        <span class="pl-10 text-sm">Konten</span>
      </a>
    </li>
  </ul>
</div>