// backend/server.js
const express = require('express');
const path = require('path');
const cors = require('cors');  // Importing the cors module
const app = express();
const PORT = process.env.PORT || 5847;

// Enable CORS for all routes
app.use(cors());

// Serve static files from the React frontend app
app.use(express.static(path.join(__dirname, '../frontend/build')));

// API route example
app.get('/api', (req, res) => {
  res.send({ message: 'Hello from the server!' });
});

// Catch-all handler for any request that doesn’t match the above
app.get('*', (req, res) => {
  res.sendFile(path.join(__dirname, '../frontend/build', 'index.html'));
});

// Start the server
app.listen(PORT, () => {
  console.log(`Server running on port ${PORT}`);
});