function search(searchStr){
    console.log(searchStr);
    return fetchData(searchStr);
    
}

function fetchData(searchStr){
    fetch('search.php', {
        method: 'POST',
        body: new URLSearchParams('searchStr=' + searchStr)
    })
    .then(res => res.json())
   .then(res => viewSearchResult(res))
    .catch(e => console.error('Error: ' +e))
}

// function block(title, description){

//     return  <article class="tv-icon-box">
//                     <div class="tv-box-top">
//                         <div class="tv-box-icon"><span class="ti-user"></span></div>
//                         <div class="tv-box-header">
//                         <h5><a href="#"><title</a></h5>
//                         </div>
//                      </div>
//                 <div class="tv-divider"></div>
//                  <div class="tv-box-body">
//                 <p>description</p>
//                 </div>
//             </article>;

// }

function viewSearchResult(result){
    //console.log(result);
    const dataviewer = document.getElementById("dataviewer");
    dataviewer.innerHTML = "";
    // for(let i=0; i<result.length; i++){
    //     const li = document.createElement("li");
    //     li.innerHTML = result[i]['title'];
    //     dataviewer.appendChild(li);
    // }

    for(let i=0; i<result.length; i++){
        const title_link = document.createElement("a");
        title_link.innerHTML = result[i]['Title'];
        title_link.setAttribute('href', '');

        const header = document.createElement("h5");
        header.appendChild(title_link);

        const div1 = document.createElement("div");
        div1.class = "tv-box-header";
        div1.appendChild(header);

        const s = document.createElement("span");
        s.className="ti-user";
        const div2 = document.createElement("div");
        div2.class = "tv-box-icon";
        div2.appendChild(s);

        const div3 = document.createElement("div");
        div3.class = "tv-box-top";
        div3.appendChild(div2);
        div3.appendChild(div1);

        const article = document.createElement("article");
        article.className="tv-icon-box";
        article.appendChild(div3);

        const div4 = document.createElement("div");
        div4.className="tv-divider";
        article.appendChild(div4);

        const para_desc = document.createElement("p");
        para_desc.innerHTML=result[i]['Description'];
        const div5 = document.createElement("div");
        div5.className="tv-box-body";
        div5.appendChild(para_desc);
        article.appendChild(para_desc);
        dataviewer.appendChild(article);
    }
}

