const search = document.getElementById('search')
const matchList = document.getElementById('match_list')

const outputHtml = matches => {
    if (matches.length > 0) {
        matchList.innerHTML = matches.map( match => `
        <li class="w-full px-3 py-4 bg-gray-300 mb-0.5 rounded-md shadow-sm">
            <span class="text-lg">${match.civility} ${match.full_name}</span>
        </li>
        `).join('')
    }
};

const searchState = async searchingText => {
    const res = await fetch('/api/people')
    const people = await res.json()
    let matches = people.filter(person => {
        const regex = new RegExp(`^${searchingText}`, 'gi')
        return person.full_name.match(regex) || person.civility.match(regex)
    })

    if (searchingText.length === 0) {
        matches = []
        matchList.innerHTML = ''
    }
    outputHtml(matches)
}

search.addEventListener('input', () => searchState(search.value))
