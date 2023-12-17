# CodeIgniter CRUD App

This is a simple CRUD (Create, Read, Update, Delete) application built using the CodeIgniter framework. The application allows users to perform basic operations on a database, including soft delete functionality.

## Table of Contents

* [Features](https://chat.openai.com/c/9bffeddb-5635-41c6-8e8c-326f5ee886ed#features)
* [Installation](https://chat.openai.com/c/9bffeddb-5635-41c6-8e8c-326f5ee886ed#installation)
* [Usage](https://chat.openai.com/c/9bffeddb-5635-41c6-8e8c-326f5ee886ed#usage)
* [Database Configuration](https://chat.openai.com/c/9bffeddb-5635-41c6-8e8c-326f5ee886ed#database-configuration)
* [Soft Delete](https://chat.openai.com/c/9bffeddb-5635-41c6-8e8c-326f5ee886ed#soft-delete)
* [Contributing](https://chat.openai.com/c/9bffeddb-5635-41c6-8e8c-326f5ee886ed#contributing)
* [License](https://chat.openai.com/c/9bffeddb-5635-41c6-8e8c-326f5ee886ed#license)

## Features

1. **Create:** The root page includes a form to add new data to the database.
2. **Read:** Navigate to the "View Data" page to display all data from the database.
3. **Update:** Update individual data entries through the provided interface.
4. **Delete:** Delete data entries from the database.
5. **Soft Delete:** Integrate soft delete functionality to mark entries as deleted without removing them from the database.

![Screenshot (93)](https://github.com/shubhrocks20/CodeIgniter-Crud-Application/assets/94545975/5b553b8d-2f08-485a-b10e-958c044ffca2)
![Screenshot (94)](https://github.com/shubhrocks20/CodeIgniter-Crud-Application/assets/94545975/ae1c4015-d787-472f-9c3a-105373ca4415)
![Screenshot (95)](https://github.com/shubhrocks20/CodeIgniter-Crud-Application/assets/94545975/0255d7c3-4438-4a22-929d-1201ec7b2ad4)



## Installation

1. Clone the repository:
   <pre><div class="bg-black rounded-md"><div class="flex items-center relative text-gray-200 bg-gray-800 dark:bg-token-surface-primary px-4 py-2 text-xs font-sans justify-between rounded-t-md"><span>bash</span><button class="flex gap-1 items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-sm"><path fill-rule="evenodd" clip-rule="evenodd" d="M12 4C10.8954 4 10 4.89543 10 6H14C14 4.89543 13.1046 4 12 4ZM8.53513 4C9.22675 2.8044 10.5194 2 12 2C13.4806 2 14.7733 2.8044 15.4649 4H17C18.6569 4 20 5.34315 20 7V19C20 20.6569 18.6569 22 17 22H7C5.34315 22 4 20.6569 4 19V7C4 5.34315 5.34315 4 7 4H8.53513ZM8 6H7C6.44772 6 6 6.44772 6 7V19C6 19.5523 6.44772 20 7 20H17C17.5523 20 18 19.5523 18 19V7C18 6.44772 17.5523 6 17 6H16C16 7.10457 15.1046 8 14 8H10C8.89543 8 8 7.10457 8 6Z" fill="currentColor"></path></svg>Copy code</button></div><div class="p-4 overflow-y-auto"><code class="!whitespace-pre hljs language-bash">git clone https://github.com/your-username/codeigniter-crud-app.git
   </code></div></div></pre>
2. Navigate to the project directory:
   <pre><div class="bg-black rounded-md"><div class="flex items-center relative text-gray-200 bg-gray-800 dark:bg-token-surface-primary px-4 py-2 text-xs font-sans justify-between rounded-t-md"><span>bash</span><button class="flex gap-1 items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-sm"><path fill-rule="evenodd" clip-rule="evenodd" d="M12 4C10.8954 4 10 4.89543 10 6H14C14 4.89543 13.1046 4 12 4ZM8.53513 4C9.22675 2.8044 10.5194 2 12 2C13.4806 2 14.7733 2.8044 15.4649 4H17C18.6569 4 20 5.34315 20 7V19C20 20.6569 18.6569 22 17 22H7C5.34315 22 4 20.6569 4 19V7C4 5.34315 5.34315 4 7 4H8.53513ZM8 6H7C6.44772 6 6 6.44772 6 7V19C6 19.5523 6.44772 20 7 20H17C17.5523 20 18 19.5523 18 19V7C18 6.44772 17.5523 6 17 6H16C16 7.10457 15.1046 8 14 8H10C8.89543 8 8 7.10457 8 6Z" fill="currentColor"></path></svg>Copy code</button></div><div class="p-4 overflow-y-auto"><code class="!whitespace-pre hljs language-bash">cd codeigniter-crud-app
   </code></div></div></pre>
3. Install dependencies:
   <pre><div class="bg-black rounded-md"><div class="flex items-center relative text-gray-200 bg-gray-800 dark:bg-token-surface-primary px-4 py-2 text-xs font-sans justify-between rounded-t-md"><span>bash</span><button class="flex gap-1 items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-sm"><path fill-rule="evenodd" clip-rule="evenodd" d="M12 4C10.8954 4 10 4.89543 10 6H14C14 4.89543 13.1046 4 12 4ZM8.53513 4C9.22675 2.8044 10.5194 2 12 2C13.4806 2 14.7733 2.8044 15.4649 4H17C18.6569 4 20 5.34315 20 7V19C20 20.6569 18.6569 22 17 22H7C5.34315 22 4 20.6569 4 19V7C4 5.34315 5.34315 4 7 4H8.53513ZM8 6H7C6.44772 6 6 6.44772 6 7V19C6 19.5523 6.44772 20 7 20H17C17.5523 20 18 19.5523 18 19V7C18 6.44772 17.5523 6 17 6H16C16 7.10457 15.1046 8 14 8H10C8.89543 8 8 7.10457 8 6Z" fill="currentColor"></path></svg>Copy code</button></div><div class="p-4 overflow-y-auto"><code class="!whitespace-pre hljs language-bash">composer install
   </code></div></div></pre>

## Usage

1. Start a local development server:
   <pre><div class="bg-black rounded-md"><div class="flex items-center relative text-gray-200 bg-gray-800 dark:bg-token-surface-primary px-4 py-2 text-xs font-sans justify-between rounded-t-md"><span>bash</span><button class="flex gap-1 items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-sm"><path fill-rule="evenodd" clip-rule="evenodd" d="M12 4C10.8954 4 10 4.89543 10 6H14C14 4.89543 13.1046 4 12 4ZM8.53513 4C9.22675 2.8044 10.5194 2 12 2C13.4806 2 14.7733 2.8044 15.4649 4H17C18.6569 4 20 5.34315 20 7V19C20 20.6569 18.6569 22 17 22H7C5.34315 22 4 20.6569 4 19V7C4 5.34315 5.34315 4 7 4H8.53513ZM8 6H7C6.44772 6 6 6.44772 6 7V19C6 19.5523 6.44772 20 7 20H17C17.5523 20 18 19.5523 18 19V7C18 6.44772 17.5523 6 17 6H16C16 7.10457 15.1046 8 14 8H10C8.89543 8 8 7.10457 8 6Z" fill="currentColor"></path></svg>Copy code</button></div><div class="p-4 overflow-y-auto"><code class="!whitespace-pre hljs language-bash">php spark serve
   </code></div></div></pre>
2. Access the application in your web browser:
   [http://localhost:8080](http://localhost:8080/)

## Database Configuration

Make sure to configure your database settings in the `app/config/database.php` file:

<pre><div class="bg-black rounded-md"><div class="flex items-center relative text-gray-200 bg-gray-800 dark:bg-token-surface-primary px-4 py-2 text-xs font-sans justify-between rounded-t-md"><span>php</span><button class="flex gap-1 items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-sm"><path fill-rule="evenodd" clip-rule="evenodd" d="M12 4C10.8954 4 10 4.89543 10 6H14C14 4.89543 13.1046 4 12 4ZM8.53513 4C9.22675 2.8044 10.5194 2 12 2C13.4806 2 14.7733 2.8044 15.4649 4H17C18.6569 4 20 5.34315 20 7V19C20 20.6569 18.6569 22 17 22H7C5.34315 22 4 20.6569 4 19V7C4 5.34315 5.34315 4 7 4H8.53513ZM8 6H7C6.44772 6 6 6.44772 6 7V19C6 19.5523 6.44772 20 7 20H17C17.5523 20 18 19.5523 18 19V7C18 6.44772 17.5523 6 17 6H16C16 7.10457 15.1046 8 14 8H10C8.89543 8 8 7.10457 8 6Z" fill="currentColor"></path></svg>Copy code</button></div><div class="p-4 overflow-y-auto"><code class="!whitespace-pre hljs language-php">'hostname' => 'localhost',
'username' => 'your_username',
'password' => 'your_password',
'database' => 'your_database',
</code></div></div></pre>

## Database Structure

To recreate the database table structure used in this application, you can use the provided `record.sql` file. This file contains the necessary SQL statements to define the table schema.


## Soft Delete

Soft delete functionality is implemented by adding a `deleted_at` column to your database table. When an entry is deleted, the `deleted_at` timestamp is set, and the entry is considered "soft deleted."

## Contributing

Feel free to contribute to the development of this CRUD app by submitting pull requests or opening issues.

## License

This project is licensed under the [MIT License](https://chat.openai.com/c/LICENSE).
