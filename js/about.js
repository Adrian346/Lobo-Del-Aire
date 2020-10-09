angular.module("myapp", []).controller("MyController", function ($scope) {
    $scope.tablas = [{
        "Ano": "2013",
        "Employees": "15",
        "GuestS": "15000",
        "SpecialEv": "3",
        "AnnualTurn": "251,325"
    }, {
        "Ano": "2014",
        "Employees": "30",
        "GuestS": "45000",
        "SpecialEv": "20",
        "AnnualTurn": "1,250,375"
    },{
        "Ano": "2015",
        "Employees": "40",
        "GuestS": "100000",
        "SpecialEv": "45",
        "AnnualTurn": "3,000,000"
    }]
    var textos = {
        "first": "Started in 2010, Ristorante con Fusion quickly established itself as a culinary icon par excellence in Hong Kong. With its unique brand of world fusion cuisine that can be found nowhere else, it enjoys patronage from the A-list clientele in Hong Kong. Featuring four of the best three-star Michelin chefs in the world, you never know what will arrive on your plate the next time you visit us.",
        
        "second": "The restaurant traces its humble beginnings to The Frying Pan, a successful chain started by our CEO, Mr. Peter Pan, that featured for the first time the world's best cuisines in a pan.",
        
        "third": "Our CEO, Peter, credits his hardworking East Asian immigrant parents who undertook the arduous journey to the shores of America with the intention of giving their children the best future. His mother's wizardy in the kitchen whipping up the tastiest dishes with whatever is available inexpensively at the supermarket, was his first inspiration to create the fusion cuisines for which The Frying Pan became well known. He brings his zeal for fusion cuisines to this restaurant, pioneering cross-cultural culinary connections.",
        
        "quarter": "Our CFO, Danny, as he is affectionately referred to by his colleagues, comes from a long established family tradition in farming and produce. His experiences growing up on a farm in the Australian outback gave him great appreciation for varieties of food sources. As he puts it in his own words, Everything that runs, wins, and everything that stays, pays!",
        
        "fifth": "Blessed with the most discerning gustatory sense, Agumbe, our CFO, personally ensures that every dish that we serve meets his exacting tastes. Our chefs dread the tongue lashing that ensues if their dish does not meet his exacting standards. He lives by his motto, You click only if you survive my lick.",
        
        "sixth": "Award winning three-star Michelin chef with wide International experience having worked closely with whos-who in the culinary world, he specializes in creating mouthwatering Indo-Italian fusion experiences. He says, Put together the cuisines from the two craziest cultures, and you get a winning hit! Amma Mia!"
    };
    $scope.texto = textos;
});