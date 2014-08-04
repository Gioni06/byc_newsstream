[
  '{{repeat(16, 16)}}',
  {
    index: '{{index()}}',
    title: '{{lorem(4, "words")}}',
    body: '{{lorem(1, "paragraphs")}}',
    picture: 'http://placehold.it/400x400',
    registered: '{{date(new Date(2014, 0, 1), new Date(), "YYYY-MM-dd")}}',
    tags:'{{random("Blogger", "Tipps", "Must Have", "Gewinnspiel")}}'

  },

  '{{repeat(4, 4)}}',
  {
    _id: '{{objectId()}}',
    index: '{{index()}}',
    title: '{{lorem(4, "words")}}',
    body: '{{lorem(1, "paragraphs")}}',
    picture: 'http://placehold.it/800x800',
    registered: '{{date(new Date(2014, 0, 1), new Date(), "YYYY-MM-dd")}}',
    tags:'Produkte'

  }
]