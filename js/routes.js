routes = [
  {
    path: '/',
    url: './index.html',
  },

  {
    path: '/signup/',
    url: './pages/signup.html',
  },
  {
    path: '/list/',
    url: './pages/list.html',
  },
  {
    path: '/makeappointment/',
    url: './pages/makeappointment.html',
  },

  {
    path: '/events/',
    url: './pages/events.html',
  },
  {
    path: '/account/',
    url: './pages/account.html',
  },
  {
    path: '/makingappointment/',
    url: './pages/makingappointment.html',
  },
    {
    path: '/login/',
    url: './pages/login.html',
  },
    {
    path: '/forgot/',
    url: './pages/forgot.html', 
  },

  // Page Loaders & Router

 
  // Default route (404 page). MUST BE THE LAST
  {
    path: '(.*)',
    url: './pages/404.html',
  },
];
