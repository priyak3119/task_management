### Task Management Application 

###  Features
- **User Authentication**: Register & login using Laravel Breeze with Vue.js support
- **Task Management (CRUD)**: Create, read, update, and delete personal tasks
- **Global Search**: Search tasks by title, description, or status
- **Task Filtering**: Filter tasks by status (pending, in-progress, completed)
- **Public API Integration**: Displays motivational quotes from quotable.io API
- **Responsive Design**: Clean, modern UI that works on all devices

### Task Fields
- Title (required)
- Description (optional)
- Status (pending, in-progress, completed)
- Due Date (optional)

### Bonus Features Implemented
Filter tasks by status
Mark task as completed with one click
Paginate task list
Visual feedback for actions (success messages)
Clean Vue component structure
Dashboard with task statistics
Refresh functionality
Error handling for API failures





### Setup Steps

   composer install
   
   npm install

 


 **Run migrations**
 
   php artisan migrate


 **Build frontend **
   
   npm run build

   #  development

   npm run dev


## Running the Application

### Development Mode

 **Start the Laravel development server**
   
   php artisan serve
   

 **Start the Vite development server** (in another terminal)

   npm run build

   npm run dev
   



## Laravel/Vite Commands Used

### Development

php artisan serve

# Start Vite development server
npm run dev

# Run database migrations
php artisan migrate

# Clear application cache
php artisan cache:clear


# Optimize Laravel for production
php artisan config:cache
php artisan route:cache
php artisan view:cache



