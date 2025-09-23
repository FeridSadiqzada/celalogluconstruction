const { execSync } = require('child_process');
const path = require('path');

exports.handler = async (event, context) => {
  try {
    // Laravel artisan serve kimi işləyir
    const result = execSync('php public/index.php', {
      cwd: path.join(__dirname, '../..'),
      env: {
        ...process.env,
        REQUEST_URI: event.path,
        REQUEST_METHOD: event.httpMethod,
        QUERY_STRING: event.queryStringParameters ? 
          new URLSearchParams(event.queryStringParameters).toString() : ''
      }
    });

    return {
      statusCode: 200,
      headers: {
        'Content-Type': 'text/html',
      },
      body: result.toString(),
    };
  } catch (error) {
    return {
      statusCode: 500,
      body: JSON.stringify({ error: error.message }),
    };
  }
};