const search = document.getElementById("search");
const matchList = document.getElementById("match-list");

// Search ColorNames.json

const searchColors = async searchText => {
    const res = await fetch('data/colors.json');
    const colors = await res.json();

    // Get Matches to text input
    let matches = colors.filter(color => {
        const regex = new RegExp(`^${searchText}`, 'gi');
        return color.name.match(regex);
    });

    if(searchText.length === 0){
        matches = [];
        matchList.innerHTML = '';
    }

    outputHtml(matches);
};

const outputHtml = matches => {
    if(matches.length > 0){
        const html = matches.map(
            match => `
        <div class="card card-body col-12">
            <h4>${match.name}</h4>
            <br>
        </div>
        `).join('');

        matchList.innerHTML = html;
    }
};

search.addEventListener('input', () => searchColors(search.value));



