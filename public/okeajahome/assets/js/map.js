
		(function() {
			new PointsMap(document.querySelector('#interactive-1'));
			new PointsMap(document.querySelector('#interactive-2'), {
				// Maximum opacity that the background element of a Point can have when the point is active (mouse gets closer to it).
				maxOpacityOnActive : 1,
				// When the mouse is [activeOn]px away from one point, its image gets opacity = point.options.maxOpacity.
				activeOn : 90
			});
		})();
