WebP Express 0.17.2. Conversion triggered using bulk conversion, 2019-12-23 10:02:11

*WebP Convert 2.3.0*  ignited.
- PHP version: 7.3.8
- Server software: Apache

Stack converter ignited

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: [doc-root]/app/uploads/2019/10/ismobilen_logo_hvid_skygge-150x138.png
- destination: [doc-root]/app/webp-express/webp-images/doc-root/app/uploads/2019/10/ismobilen_logo_hvid_skygge-150x138.png.webp
- log-call-arguments: true
- converters: (array of 9 items)

The following options have not been explicitly set, so using the following defaults:
- converter-options: (empty array)
- shuffle: false
- preferred-converters: (empty array)
- extra-converters: (empty array)

The following options were supplied and are passed on to the converters in the stack:
- alpha-quality: 85
- encoding: "auto"
- metadata: "none"
- near-lossless: 60
- quality: 85
------------


*Trying: cwebp* 

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: [doc-root]/app/uploads/2019/10/ismobilen_logo_hvid_skygge-150x138.png
- destination: [doc-root]/app/webp-express/webp-images/doc-root/app/uploads/2019/10/ismobilen_logo_hvid_skygge-150x138.png.webp
- alpha-quality: 85
- encoding: "auto"
- low-memory: true
- log-call-arguments: true
- metadata: "none"
- method: 6
- near-lossless: 60
- quality: 85
- use-nice: true
- command-line-options: ""
- try-common-system-paths: true
- try-supplied-binary-for-os: true

The following options have not been explicitly set, so using the following defaults:
- auto-filter: false
- default-quality: 85
- max-quality: 85
- preset: "none"
- size-in-percentage: null (not set)
- skip: false
- rel-path-to-precompiled-binaries: *****
- try-cwebp: true
- try-discovering-cwebp: true
------------

Encoding is set to auto - converting to both lossless and lossy and selecting the smallest file

Converting to lossy
Looking for cwebp binaries.
Discovering if a plain cwebp call works (to skip this step, disable the "try-cwebp" option)
- Executing: cwebp -version. Result: *Exec failed* (the cwebp binary was not found at path: cwebp)
Nope a plain cwebp call does not work
Discovering binaries using "which -a cwebp" command. (to skip this step, disable the "try-discovering-cwebp" option)
Found 0 binaries
Discovering binaries by peeking in common system paths (to skip this step, disable the "try-common-system-paths" option)
Found 1 binaries: 
- /usr/local/bin/cwebp
Discovering binaries which are distributed with the webp-convert library (to skip this step, disable the "try-supplied-binary-for-os" option)
Checking if we have a supplied precompiled binary for your OS (Darwin)... We do.
Found 1 binaries: 
- [doc-root]/app/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-103-mac-10_14
Detecting versions of the cwebp binaries found
- Executing: /usr/local/bin/cwebp -version. Result: version: *1.0.3*
- Executing: [doc-root]/app/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-103-mac-10_14 -version. Result: version: *1.0.3*
Binaries ordered by version number.
- /usr/local/bin/cwebp: (version: 1.0.3)
- [doc-root]/app/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-103-mac-10_14: (version: 1.0.3)
Trying the first of these. If that should fail (it should not), the next will be tried and so on.
Creating command line options for version: 1.0.3
Quality: 85. 
The near-lossless option ignored for lossy
Trying to convert by executing the following command:
nice /usr/local/bin/cwebp -metadata none -q 85 -alpha_q '85' -m 6 -low_memory '[doc-root]/app/uploads/2019/10/ismobilen_logo_hvid_skygge-150x138.png' -o '[doc-root]/app/webp-express/webp-images/doc-root/app/uploads/2019/10/ismobilen_logo_hvid_skygge-150x138.png.webp.lossy.webp' 2>&1

*Output:* 
Saving file '[doc-root]/app/webp-express/webp-images/doc-root/app/uploads/2019/10/ismobilen_logo_hvid_skygge-150x138.png.webp.lossy.webp'
File:      [doc-root]/app/uploads/2019/10/ismobilen_logo_hvid_skygge-150x138.png
Dimension: 150 x 138 (with alpha)
Output:    6806 bytes Y-U-V-All-PSNR 43.64 45.10 44.19   43.94 dB
           (2.63 bpp)
block count:  intra4:         63  (70.00%)
              intra16:        27  (30.00%)
              skipped:        17  (18.89%)
bytes used:  header:            282  (4.1%)
             mode-partition:    321  (4.7%)
             transparency:     1420 (99.0 dB)
 Residuals bytes  |segment 1|segment 2|segment 3|segment 4|  total
  intra4-coeffs:  |    3769 |       0 |       0 |       7 |    3776  (55.5%)
 intra16-coeffs:  |      45 |       0 |       0 |       4 |      49  (0.7%)
  chroma coeffs:  |     893 |       0 |       0 |       8 |     901  (13.2%)
    macroblocks:  |      88%|       0%|       0%|      12%|      90
      quantizer:  |      15 |      11 |       8 |       8 |
   filter level:  |       4 |       2 |       2 |       0 |
------------------+---------+---------+---------+---------+-----------------
 segments total:  |    4707 |       0 |       0 |      19 |    4726  (69.4%)
Lossless-alpha compressed size: 1419 bytes
  * Header size: 70 bytes, image data size: 1349
  * Precision Bits: histogram=3 transform=3 cache=0
  * Palette size:   128

Success
Reduction: 66% (went from 19 kb to 7 kb)

Converting to lossless
Looking for cwebp binaries.
Discovering if a plain cwebp call works (to skip this step, disable the "try-cwebp" option)
- Executing: cwebp -version. Result: *Exec failed* (the cwebp binary was not found at path: cwebp)
Nope a plain cwebp call does not work
Discovering binaries using "which -a cwebp" command. (to skip this step, disable the "try-discovering-cwebp" option)
Found 0 binaries
Discovering binaries by peeking in common system paths (to skip this step, disable the "try-common-system-paths" option)
Found 1 binaries: 
- /usr/local/bin/cwebp
Discovering binaries which are distributed with the webp-convert library (to skip this step, disable the "try-supplied-binary-for-os" option)
Checking if we have a supplied precompiled binary for your OS (Darwin)... We do.
Found 1 binaries: 
- [doc-root]/app/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-103-mac-10_14
Detecting versions of the cwebp binaries found
- Executing: /usr/local/bin/cwebp -version. Result: version: *1.0.3*
- Executing: [doc-root]/app/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-103-mac-10_14 -version. Result: version: *1.0.3*
Binaries ordered by version number.
- /usr/local/bin/cwebp: (version: 1.0.3)
- [doc-root]/app/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-103-mac-10_14: (version: 1.0.3)
Trying the first of these. If that should fail (it should not), the next will be tried and so on.
Creating command line options for version: 1.0.3
Trying to convert by executing the following command:
nice /usr/local/bin/cwebp -metadata none -q 85 -alpha_q '85' -near_lossless 60 -m 6 -low_memory '[doc-root]/app/uploads/2019/10/ismobilen_logo_hvid_skygge-150x138.png' -o '[doc-root]/app/webp-express/webp-images/doc-root/app/uploads/2019/10/ismobilen_logo_hvid_skygge-150x138.png.webp.lossless.webp' 2>&1

*Output:* 
Saving file '[doc-root]/app/webp-express/webp-images/doc-root/app/uploads/2019/10/ismobilen_logo_hvid_skygge-150x138.png.webp.lossless.webp'
File:      [doc-root]/app/uploads/2019/10/ismobilen_logo_hvid_skygge-150x138.png
Dimension: 150 x 138
Output:    9178 bytes (3.55 bpp)
Lossless-ARGB compressed size: 9178 bytes
  * Header size: 410 bytes, image data size: 8742
  * Lossless features used: SUBTRACT-GREEN
  * Precision Bits: histogram=2 transform=2 cache=10

Success
Reduction: 54% (went from 19 kb to 9 kb)

Picking lossy
cwebp succeeded :)

Converted image in 279 ms, reducing file size with 66% (went from 19 kb to 7 kb)
