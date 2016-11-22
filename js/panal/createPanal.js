window.addEventListener("load", function () {
  // Get the data. This example uses search results for the query "visualization".
  var searchResults = data();

  // Convert the data to the JSON format required by FoamTree.
  var dataObject = {
    groups: searchResults.map(function (result, index) {
      return {
        // Use the result's title as the label
        label: "[" + (index + 1) + "]\u00a0" + result.title,

        // Combine the rank and number of sources to form group weight
        weight: Math.sqrt(searchResults.length - index) * result.sources.length,

        // Pass the snippet as an extra bit of data. We'll display
        // the snippet in FoamTree title bar.
        snippet: result.snippet
      }
    })
  };

  // Get the element FoamTree will be embedded in
  var element = document.getElementById("visualization");

  // Initialize FoamTree
  var foamtree = new CarrotSearchFoamTree({
    element: element,
    pixelRatio: window.devicePixelRatio || 1,
    relaxationInitializer: "fisheye",
    dataObject: dataObject,
    titleBarDecorator: function (opts, props, vars) {
      vars.titleBarText = props.group.snippet;
    },
    maxLabelSizeForTitleBar: Number.MAX_VALUE
  });

  // Resize FoamTree on orientation change
  window.addEventListener("orientationchange", foamtree.resize);

  // Resize on window size changes
  window.addEventListener("resize", (function() {
    var timeout;
    return function() {
      window.clearTimeout(timeout);
      timeout = window.setTimeout(foamtree.resize, 300);
    }
  })());

  function data() {
    return [
      {   "id": "0", 
          "url": "http://www.thefreedictionary.com/visualization", 
          "language": "en", 
          "title": "visualization - definition of visualization by the Free Online …", 
          "snippet": "vi·su·al·ize (v zh - -l z ). v. vi·su·al·ized, vi·su·al·iz·ing, vi·su·al·iz·es. v.tr. 1. To form a mental image of; envisage: tried to visualize the scene as it was described. 2.", 
          "sources": ["Bing", "Google", "Teoma", "Yahoo"]},
      {"id": "1", "url": "http://en.wikipedia.org/wiki/Visualization", "language": "en", "title": "Visualization - Wikipedia, the free encyclopedia", "snippet": "The term visualization or visualisation may refer to: Creative visualization · Flow visualization · Geovisualization · Illustration · Information graphics, visual …‎Creative visualization - ‎Information visualization - ‎Visualization (computer …", "sources": ["Google", "Wikipedia", "Yahoo"]},
      {"id": "2", "url": "http://en.wikipedia.org/wiki/Visualization_(computer_graphics)", "language": "en", "title": "Visualization (computer graphics) - Wikipedia, the free encyclopedia", "snippet": "Visualization or visualisation is any technique for creating images, diagrams, or animations to communicate a message. Visualization through visual imagery has been …", "sources": ["Google", "Wikipedia", "Yahoo"]},
      {"id": "3", "url": "http://datavisualization.ch/", "language": "en", "title": "Datavisualization.ch", "snippet": "News, people, event listings, tools and data sets, focusing on the domain of information visualization.", "sources": ["Bing", "Google", "Yahoo"]},
      {"id": "4", "url": "http://www.visual-literacy.org/periodic_table/periodic_table.html", "language": "en", "title": "A Periodic Table of Visualization Methods - Visual Literacy", "snippet": "continuum …", "sources": ["Google", "Teoma", "Yahoo"]},
      {"id": "5", "url": "http://en.wikipedia.org/wiki/Scientific_visualization", "language": "en", "title": "Scientific visualization - Wikipedia, the free encyclopedia", "snippet": "Scientific visualization (also spelled scientific visualisation) is an interdisciplinary branch of science according to Friendly (2008) \"primarily concerned with the …", "sources": ["Bing", "Wikipedia"]},
      {"id": "6", "url": "http://visualizing.org/", "language": "en", "title": "visualizing.org | Data Visualizations, Challenges, Community", "snippet": "A community of creative people making sense of complex issues through data and design.‎Explore Visualizations - ‎Challenges - ‎Find Data - ‎Favorite …", "sources": ["Google", "Teoma"]},
      {"id": "7", "url": "http://psychcentral.com/lib/guided-visualization-a-way-to-relax-reduce-stress-and-more/000684", "language": "en", "title": "Guided Visualization: A Way to Relax, Reduce Stress, and More …", "snippet": "Jan 30, 2013 … Make yourself comfortable. Lie down or sit up, spine straight, legs uncrossed… Take a slow, deep breath…Continue to take slow, deep breaths.", "sources": ["Google", "Teoma"]}
    ];
  }
});