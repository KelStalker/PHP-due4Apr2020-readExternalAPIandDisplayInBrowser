// Grab the DOM section we created in the api-request-test1 page
const apiTest1Element = document.getElementById( 'api-test1');



 alert( 'Hello Kel!');  // **WORKING!**

// Sets the request URL and converts the response string to an object

fetch( 'http://localhost:90/api/apidata.php' )
    .then( Response => Response.json() )
    // alreaded tested in POSTMAN, so can now use the data (in an OBJECT)
    .then( apidata => {
        const heading = document.createElement('h2');
        heading.textContent = 'apidata';
        const list = document.createElement( 'UL');
        for ( const listItem in apidata ) {
         listItem.innerHTML = `
            <dl>
                <dt>Age</dt>
                <dd>${listItem.age}</dd>
                <dt>Type</dt>
                <dd>${listItem.type}</dd>
                <dt>Age</dt>
                <dd>${listItem.age}</dd>
            </dl>
         `;
        }

    } )