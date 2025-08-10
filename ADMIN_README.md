# Admin Image Management System

This Laravel application includes a complete admin system for managing images with CRUD operations and load more functionality.

## Features

- **Image Management**: Add, edit, delete, and reorder images
- **Load More**: Dynamic loading of images on the frontend
- **Admin Authentication**: Protected admin routes requiring user login
- **Responsive Design**: Modern UI built with Tailwind CSS

## Setup

1. **Database Migration**: Run the images table migration
   ```bash
   php artisan migrate
   ```

2. **Storage Link**: Create a symbolic link for image storage
   ```bash
   php artisan storage:link
   ```

3. **User Authentication**: Ensure you have user authentication set up (Laravel Breeze/Jetstream)

## Admin Access

1. **Login**: Access the application and log in with your user account
2. **Admin Dashboard**: Click on "Admin" in the navigation menu
3. **Image Management**: Use the "Manage Images" link or "Add New Image" button

## Admin Routes

- `/admin/dashboard` - Admin dashboard with image statistics
- `/admin/images` - List all images
- `/admin/images/create` - Add new image
- `/admin/images/{id}/edit` - Edit existing image
- `/admin/images/{id}` - Delete image (DELETE method)
- `/admin/images/{id}/toggle-status` - Toggle image active/inactive status

## Image Fields

- **Image**: Required image file (JPEG, PNG, JPG, GIF, max 2MB)
- **Order**: Display order (lower numbers appear first)

## Frontend Integration

- **Dynamic Loading**: Images are loaded from the database on the main page
- **Load More**: Users can click "Load More Images" to see additional images
- **Gallery Integration**: Images work with the existing gallery system

## File Structure

```
app/
├── Http/Controllers/
│   ├── ImageController.php      # Image CRUD operations
│   ├── AdminController.php      # Admin dashboard
│   └── HomeController.php       # Main page with images
├── Models/
│   └── Image.php               # Image model
resources/views/
├── admin/
│   ├── dashboard.blade.php      # Admin dashboard
│   └── images/
│       ├── index.blade.php      # Image list
│       ├── create.blade.php     # Add image form
│       └── edit.blade.php       # Edit image form
├── partials/
│   └── image-grid.blade.php    # Image grid partial for load more
└── index.blade.php              # Main page with dynamic images
```

## Usage

### Adding Images
1. Go to Admin → Manage Images
2. Click "Add New Image"
3. Upload an image file
4. Set the display order
5. Click "Upload Image"

### Editing Images
1. Go to Admin → Manage Images
2. Click "Edit" on any image
3. Update the image file and/or order
4. Click "Update Image"

### Deleting Images
1. Go to Admin → Manage Images
2. Click "Delete" on any image
3. Confirm the deletion

### Managing Image Status
1. Go to Admin → Manage Images
2. Click on the status badge (Active/Inactive)
3. The status will toggle automatically

## Load More Functionality

The frontend automatically loads 6 images initially and provides a "Load More Images" button. When clicked, it fetches the next 6 images via AJAX and adds them to the grid.

## Security Features

- All admin routes are protected by authentication middleware
- File upload validation (file type, size limits)
- CSRF protection on all forms
- Secure file storage in public disk

## Customization

- **Image Categories**: Currently set to 'music' by default
- **Pagination**: Load more shows 6 images per page
- **File Types**: Supported formats can be modified in ImageController
- **Storage**: Images are stored in `storage/app/public/images/`

## Troubleshooting

- **Images not showing**: Ensure `php artisan storage:link` has been run
- **Upload errors**: Check file permissions and storage disk configuration
- **Admin access denied**: Ensure user is authenticated and routes are properly protected 