
function start() {

        document.getElementById('buttonB').addEventListener('click', function() {

          var arrayOfSentences = []; // stores the sentences within the inputted paragraph
          var previous = 0; // keeps track of where to begin new sentence
          var count = 0; // keeps track of the number of sentences

          var input = document.getElementsByName("tagB")[0].value; // takes in input from textarea

          for (var i = 0; i<input.length-1; i++) {
            if (input[i]==='.') {
                arrayOfSentences.push(input.substring(previous, i+1));
                count++;
                previous += i + 1 - previous;

            }
          }

          var thing = function(sentence) { gapi.client.init({
              'apiKey': 'AIzaSyAAUG25gfbw5GcFuMSSt-FeRHMSoq-7OhA',
              'discoveryDocs': ['https://language.googleapis.com/$discovery/rest?version=v1beta1']
            }).then(function() {

              return gapi.client.language.documents.analyzeEntities({
                "document":{
                    "type":"PLAIN_TEXT",
                    "content": sentence // sentences don't work :(
                  },
                  "encodingType":"UTF8"
              });

            }).then(function(resp) {
              // send to dataLayer here
                console.log(resp.result);

                //resp.body displays json as string
                var len = 0;

                for (var o in resp.result.entities) {
                  len++;
                }

                // adds a bullet point
                document.getElementById('point').innerHTML += "&#8226; ";

                // split with commas
                for (var i=0; i<len; i++) {
                  document.getElementById('point').innerHTML += resp.result.entities[i].mentions[0].text.content;


                  if (i<len-1) {
                    document.getElementById('point').innerHTML += ", ";
                  }
                }

                // adds new line
                document.getElementById('point').innerHTML += "<br>";

                // *** spits out wikipedia link: document.getElementById('point').innerHTML += resp.result.entities[0].metadata.wikipedia_url;

                // *** correct format for finding element in JSON console file: document.getElementById('point').innerHTML += resp.result.entities[0].mentions[0].text.content;

            }, function(reason) {
              console.log('Error: ' + reason.result.error.message);
            });
          };

          for (var i=0; i<count; i++) {
            thing(arrayOfSentences[i]);
          }

        });


      };
      gapi.load('client', start);