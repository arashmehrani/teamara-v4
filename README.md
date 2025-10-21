## **Plugins**
* laravel 12.34.0
* livewire 3.6.4
* spatie/laravel-permission 6.21.0
* hekmatinasser/verta 8.5
* morilog/jalali 3.4.2
* beyondcode/laravel-query-detector --dev 2.1.0
* barryvdh/laravel-debugbar --dev --dev 3.16.0

* phpoffice/phpword 1.2.0
* rap2hpoutre/fast-excel 5.5.0
* simplesoftwareio/simple-qrcode 4.2.0

## **instalation**
1- Install PHP dependencies: `composer install`

2- Create new `.env` file from copying `.env.example`

3- Generate laravel app key `php artisan key:generate`

4- Install node dependencies: `npm install`

5- Run command `npm run dev` to start vite development.

6- Run command `npm run build` to build for production.

7- Run command `php artisan serve` to start php serve.

## **Create livewire component**

for full page:

`php artisan make:livewire hr.personnel.index`

for inline:

`php artisan make:livewire components.company.index`


## Project Structure

```
resources/
├── css/
│   └── app.css (Tailwind + Metronic custom styles)
├── js/
│   └── app.js (Alpine.js + Livewire integration)
└── views/
    ├── layouts/
    │   ├── partials/
    │   │   ├── head.blade.php
    │   │   ├── scripts.blade.php
    │   │   └── theme-mode.blade.php
    │   ├── demo1/
    │   │   ├── base.blade.php
    │   │   └── partials/
    │   │       ├── header.blade.php
    │   │       ├── sidebar.blade.php
    │   │       ├── footer.blade.php
    │   │       └── mega-menu.blade.php
    │   └── demo2/
    │       ├── base.blade.php
    │       └── partials/
    │           ├── header.blade.php
    │           └── footer.blade.php
    ├── demo1/
    │   └── index.blade.php
    ├── demo2/
    │   └── index.blade.php
    └── livewire/
        ├── demo1/
        │   ├── navigation-menu.blade.php
        │   ├── sidebar-toggle.blade.php
        │   └── user-dropdown.blade.php
        ├── demo2/
        │   ├── navigation-menu.blade.php
        │   ├── balance-widget.blade.php
        │   └── user-dropdown.blade.php
        └── shared/
            ├── theme-mode.blade.php
            ├── search-box.blade.php
            └── notification-dropdown.blade.php
```

## Features Implemented

### ✅ Completed Features

1. **Laravel Project Setup**
   - Fresh Laravel 11.x installation
   - Livewire 3.x integration
   - Tailwind CSS 4.x configuration
   - Alpine.js integration
   - Vite 6.x build system

2. **Routing System**
   - Demo1 routes (`/demo1`)
   - Demo2 routes (`/demo2`)
   - Controllers: `Demo1Controller`, `Demo2Controller`

3. **Livewire Components**
   - **Demo1 Components**:
     - `NavigationMenu` - Sidebar navigation with active states
     - `SidebarToggle` - Mobile sidebar toggle functionality
     - `UserDropdown` - User account dropdown with settings
   - **Demo2 Components**:
     - `NavigationMenu` - Horizontal navigation menu
     - `BalanceWidget` - Balance display component
     - `UserDropdown` - User account dropdown
   - **Shared Components**:
     - `ThemeMode` - Dark/light theme toggle
     - `SearchBox` - Global search with results
     - `NotificationDropdown` - Notification management

4. **Layout System**
   - **Demo1**: Sidebar-based layout (traditional admin)
   - **Demo2**: Vertical layout (modern dashboard)
   - Shared partials (head, scripts, theme-mode)
   - Proper asset management with `asset()` helpers

5. **UI Components**
   - Dashboard cards with statistics
   - Interactive menus and dropdowns
   - Responsive design with mobile support
   - Chart placeholders (ready for ApexCharts/Chart.js)
   - Data tables with sorting/filtering readiness

6. **Build System**
   - Vite configuration optimized for Laravel
   - Tailwind CSS with custom Metronic classes
   - PostCSS processing
   - Development and production builds working

### 🔧 Livewire Component Classes Needed

The following PHP classes need to be created for full functionality:

```php
// Demo1 Components
app/Livewire/Demo1/NavigationMenu.php
app/Livewire/Demo1/SidebarToggle.php
app/Livewire/Demo1/UserDropdown.php

// Demo2 Components
app/Livewire/Demo2/NavigationMenu.php
app/Livewire/Demo2/BalanceWidget.php
app/Livewire/Demo2/UserDropdown.php

// Shared Components
app/Livewire/Shared/ThemeMode.php
app/Livewire/Shared/SearchBox.php
app/Livewire/Shared/NotificationDropdown.php
```

### 🎨 Styling System

- **Tailwind CSS 4.x** with custom Metronic utilities
- **Custom CSS classes**: `kt-*` prefixed components
- **Dark mode support** with theme switching
- **Responsive design** with mobile-first approach
- **Custom color variables** matching Metronic design system

## Usage

### Development
```bash
# Install dependencies
npm install
composer install

# Start development server
php artisan serve
npm run dev
```

### Production Build
```bash
npm run build
```

### Routes
- **Demo1 Dashboard**: `/demo1` - Sidebar-based layout
- **Demo2 Dashboard**: `/demo2` - Vertical layout

## Next Steps

### Immediate Tasks
1. **Create Livewire PHP Classes** - Implement the component logic
2. **Add Media Assets** - Copy Metronic images and icons
3. **Enhance Interactivity** - Add chart libraries, form validation
4. **Database Integration** - Connect real data sources
5. **Authentication** - Integrate Laravel Breeze/Jetstream

### Enhancement Opportunities
1. **Advanced Components**
   - Data tables with server-side processing
   - Real-time notifications
   - File upload components
   - Form builders

2. **Performance Optimization**
   - Lazy loading for components
   - Asset optimization
   - Caching strategies

3. **Additional Features**
   - Multi-language support
   - API integration
   - WebSocket notifications
   - Advanced search

## Architecture Decisions

### Why This Structure?
- **Symfony Pattern Compliance**: Matches the original Metronic structure
- **Separation of Concerns**: Demo1 and Demo2 are completely separate
- **Reusable Components**: Shared components reduce duplication
- **Maintainability**: Clear organization makes updates easier

### Technology Choices
- **Livewire over Vue/React**: Simpler for Laravel developers
- **Tailwind CSS**: Utility-first, matches Metronic approach
- **Alpine.js**: Lightweight interactivity for enhanced UX
- **Vite**: Modern build tool with hot reloading

## Contributing

When adding new components or features:

1. Follow the established directory structure
2. Use proper Blade syntax with `{{-- comments --}}`
3. Implement Livewire wire:model for forms
4. Maintain responsive design principles
5. Test both Demo1 and Demo2 layouts

## License

This integration follows the Metronic license terms. The Laravel application code is open source.
