<!DOCTYPE html>
<html lang="en" data-theme="dark">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>


    <title>Web3 Journey</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
    tailwind.config = {
        corePlugins: {
        preflight: false,
        },
    }
    </script>

</head>


<body class="bg-gray-200">


<div class="bg-white">
  <main class="mx-auto w-full max-w-7xl px-6 pt-10 pb-16 sm:pb-24 lg:px-8">
    <img class="mx-auto h-10 w-auto sm:h-12" src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
    <div class="mx-auto mt-20 max-w-2xl text-center sm:mt-24">
      <p class="text-base/8 font-semibold text-indigo-600">404</p>
      <h1 class="mt-4 text-5xl font-semibold tracking-tight text-balance text-gray-900 sm:text-6xl">This page does not exist</h1>
      <p class="mt-6 text-lg font-medium text-pretty text-gray-500 sm:text-xl/8">Sorry, we couldn’t find the page you’re looking for.</p>
    </div>
    <div class="mx-auto mt-16 flow-root max-w-lg sm:mt-20">
      <h2 class="sr-only">Popular pages</h2>
      <ul role="list" class="-mt-6 divide-y divide-gray-900/5 border-b border-gray-900/5">
        <li class="relative flex gap-x-6 py-6">
          <div class="flex size-10 flex-none items-center justify-center rounded-lg ring-1 shadow-xs ring-gray-900/10">
            <svg class="size-6 text-indigo-600" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" data-slot="icon">
              <path d="M11.25 4.533A9.707 9.707 0 0 0 6 3a9.735 9.735 0 0 0-3.25.555.75.75 0 0 0-.5.707v14.25a.75.75 0 0 0 1 .707A8.237 8.237 0 0 1 6 18.75c1.995 0 3.823.707 5.25 1.886V4.533ZM12.75 20.636A8.214 8.214 0 0 1 18 18.75c.966 0 1.89.166 2.75.47a.75.75 0 0 0 1-.708V4.262a.75.75 0 0 0-.5-.707A9.735 9.735 0 0 0 18 3a9.707 9.707 0 0 0-5.25 1.533v16.103Z" />
            </svg>
          </div>
          <div class="flex-auto">
            <h3 class="text-sm/6 font-semibold text-gray-900">
              <a href="#">
                <span class="absolute inset-0" aria-hidden="true"></span>
                Documentation
              </a>
            </h3>
            <p class="mt-2 text-sm/6 text-gray-600">Learn how to integrate our tools with your app.</p>
          </div>
          <div class="flex-none self-center">
            <svg class="size-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
              <path fill-rule="evenodd" d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
            </svg>
          </div>
        </li>
        <li class="relative flex gap-x-6 py-6">
          <div class="flex size-10 flex-none items-center justify-center rounded-lg ring-1 shadow-xs ring-gray-900/10">
            <svg class="size-6 text-indigo-600" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" data-slot="icon">
              <path d="M5.625 3.75a2.625 2.625 0 1 0 0 5.25h12.75a2.625 2.625 0 0 0 0-5.25H5.625ZM3.75 11.25a.75.75 0 0 0 0 1.5h16.5a.75.75 0 0 0 0-1.5H3.75ZM3 15.75a.75.75 0 0 1 .75-.75h16.5a.75.75 0 0 1 0 1.5H3.75a.75.75 0 0 1-.75-.75ZM3.75 18.75a.75.75 0 0 0 0 1.5h16.5a.75.75 0 0 0 0-1.5H3.75Z" />
            </svg>
          </div>
          <div class="flex-auto">
            <h3 class="text-sm/6 font-semibold text-gray-900">
              <a href="#">
                <span class="absolute inset-0" aria-hidden="true"></span>
                API Reference
              </a>
            </h3>
            <p class="mt-2 text-sm/6 text-gray-600">A complete API reference for our libraries.</p>
          </div>
          <div class="flex-none self-center">
            <svg class="size-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
              <path fill-rule="evenodd" d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
            </svg>
          </div>
        </li>
        <li class="relative flex gap-x-6 py-6">
          <div class="flex size-10 flex-none items-center justify-center rounded-lg ring-1 shadow-xs ring-gray-900/10">
            <svg class="size-6 text-indigo-600" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" data-slot="icon">
              <path fill-rule="evenodd" d="M6 3a3 3 0 0 0-3 3v12a3 3 0 0 0 3 3h12a3 3 0 0 0 3-3V6a3 3 0 0 0-3-3H6Zm1.5 1.5a.75.75 0 0 0-.75.75V16.5a.75.75 0 0 0 1.085.67L12 15.089l4.165 2.083a.75.75 0 0 0 1.085-.671V5.25a.75.75 0 0 0-.75-.75h-9Z" clip-rule="evenodd" />
            </svg>
          </div>
          <div class="flex-auto">
            <h3 class="text-sm/6 font-semibold text-gray-900">
              <a href="#">
                <span class="absolute inset-0" aria-hidden="true"></span>
                Guides
              </a>
            </h3>
            <p class="mt-2 text-sm/6 text-gray-600">Installation guides that cover popular setups.</p>
          </div>
          <div class="flex-none self-center">
            <svg class="size-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
              <path fill-rule="evenodd" d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
            </svg>
          </div>
        </li>
        <li class="relative flex gap-x-6 py-6">
          <div class="flex size-10 flex-none items-center justify-center rounded-lg ring-1 shadow-xs ring-gray-900/10">
            <svg class="size-6 text-indigo-600" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" data-slot="icon">
              <path fill-rule="evenodd" d="M3.75 4.5a.75.75 0 0 1 .75-.75h.75c8.284 0 15 6.716 15 15v.75a.75.75 0 0 1-.75.75h-.75a.75.75 0 0 1-.75-.75v-.75C18 11.708 12.292 6 5.25 6H4.5a.75.75 0 0 1-.75-.75V4.5Zm0 6.75a.75.75 0 0 1 .75-.75h.75a8.25 8.25 0 0 1 8.25 8.25v.75a.75.75 0 0 1-.75.75H12a.75.75 0 0 1-.75-.75v-.75a6 6 0 0 0-6-6H4.5a.75.75 0 0 1-.75-.75v-.75Zm0 7.5a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0Z" clip-rule="evenodd" />
            </svg>
          </div>
          <div class="flex-auto">
            <h3 class="text-sm/6 font-semibold text-gray-900">
              <a href="#">
                <span class="absolute inset-0" aria-hidden="true"></span>
                Blog
              </a>
            </h3>
            <p class="mt-2 text-sm/6 text-gray-600">Read our latest news and articles.</p>
          </div>
          <div class="flex-none self-center">
            <svg class="size-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
              <path fill-rule="evenodd" d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
            </svg>
          </div>
        </li>
      </ul>
      <div class="mt-10 flex justify-center">
        <a href="#" class="text-sm/6 font-semibold text-indigo-600"><span aria-hidden="true">&larr;</span> Back to home</a>
      </div>
    </div>
  </main>
  <footer class="border-t border-gray-100 py-6 sm:py-10">
    <div class="mx-auto flex max-w-7xl flex-col items-center justify-center gap-8 px-6 sm:flex-row lg:px-8">
      <p class="text-sm/7 text-gray-400">&copy; Your Company, Inc. All rights reserved.</p>
      <div class="hidden sm:block sm:h-7 sm:w-px sm:flex-none sm:bg-gray-200"></div>
      <div class="flex gap-x-4">
        <a href="#" class="text-gray-400 hover:text-gray-500">
          <span class="sr-only">X</span>
          <svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
            <path d="M13.6823 10.6218L20.2391 3H18.6854L12.9921 9.61788L8.44486 3H3.2002L10.0765 13.0074L3.2002 21H4.75404L10.7663 14.0113L15.5685 21H20.8131L13.6819 10.6218H13.6823ZM11.5541 13.0956L10.8574 12.0991L5.31391 4.16971H7.70053L12.1742 10.5689L12.8709 11.5655L18.6861 19.8835H16.2995L11.5541 13.096V13.0956Z" />
          </svg>
        </a>
        <a href="#" class="text-gray-400 hover:text-gray-500">
          <span class="sr-only">GitHub</span>
          <svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
            <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" />
          </svg>
        </a>
        <a href="#" class="text-gray-400 hover:text-gray-500">
          <span class="sr-only">Instagram</span>
          <svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
            <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" />
          </svg>
        </a>
      </div>
    </div>
  </footer>
</div>


</body>

</html>