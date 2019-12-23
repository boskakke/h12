WebP Express 0.17.2. Conversion triggered using bulk conversion, 2019-12-23 10:05:15

*WebP Convert 2.3.0*  ignited.
- PHP version: 7.3.8
- Server software: Apache

Stack converter ignited

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: [doc-root]/app/uploads/2019/10/GripGrab-logo-black-1024x546.jpg
- destination: [doc-root]/app/webp-express/webp-images/doc-root/app/uploads/2019/10/GripGrab-logo-black-1024x546.jpg.webp
- log-call-arguments: true
- converters: (array of 9 items)

The following options have not been explicitly set, so using the following defaults:
- converter-options: (empty array)
- shuffle: false
- preferred-converters: (empty array)
- extra-converters: (empty array)

The following options were supplied and are passed on to the converters in the stack:
- encoding: "auto"
- metadata: "none"
- near-lossless: 60
- quality: 70
------------


*Trying: cwebp* 

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: [doc-root]/app/uploads/2019/10/GripGrab-logo-black-1024x546.jpg
- destination: [doc-root]/app/webp-express/webp-images/doc-root/app/uploads/2019/10/GripGrab-logo-black-1024x546.jpg.webp
- encoding: "auto"
- low-memory: true
- log-call-arguments: true
- metadata: "none"
- method: 6
- near-lossless: 60
- quality: 70
- use-nice: true
- command-line-options: ""
- try-common-system-paths: true
- try-supplied-binary-for-os: true

The following options have not been explicitly set, so using the following defaults:
- alpha-quality: 85
- auto-filter: false
- default-quality: 75
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
Quality: 70. 
Consider setting quality to "auto" instead. It is generally a better idea
The near-lossless option ignored for lossy
Trying to convert by executing the following command:
nice /usr/local/bin/cwebp -metadata none -q 70 -alpha_q '85' -m 6 -low_memory '[doc-root]/app/uploads/2019/10/GripGrab-logo-black-1024x546.jpg' -o '[doc-root]/app/webp-express/webp-images/doc-root/app/uploads/2019/10/GripGrab-logo-black-1024x546.jpg.webp.lossy.webp' 2>&1

*Output:* 
Saving file '[doc-root]/app/webp-express/webp-images/doc-root/app/uploads/2019/10/GripGrab-logo-black-1024x546.jpg.webp.lossy.webp'
File:      [doc-root]/app/uploads/2019/10/GripGrab-logo-black-1024x546.jpg
Dimension: 1024 x 546
Output:    5926 bytes Y-U-V-All-PSNR 47.66 99.00 99.00   49.42 dB
           (0.08 bpp)
block count:  intra4:        258  (11.52%)
              intra16:      1982  (88.48%)
              skipped:      1942  (86.70%)
bytes used:  header:            124  (2.1%)
             mode-partition:   1949  (32.9%)
 Residuals bytes  |segment 1|segment 2|segment 3|segment 4|  total
  intra4-coeffs:  |    3718 |       4 |       0 |       2 |    3724  (62.8%)
 intra16-coeffs:  |      68 |       1 |      10 |      17 |      96  (1.6%)
  chroma coeffs:  |       3 |       0 |       0 |       1 |       4  (0.1%)
    macroblocks:  |      19%|       0%|       1%|      80%|    2240
      quantizer:  |      39 |      36 |      29 |      24 |
   filter level:  |      11 |       8 |       5 |       4 |
------------------+---------+---------+---------+---------+-----------------
 segments total:  |    3789 |       5 |      10 |      20 |    3824  (64.5%)

Success
Reduction: 76% (went from 24 kb to 6 kb)

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
nice /usr/local/bin/cwebp -metadata none -q 70 -alpha_q '85' -near_lossless 60 -m 6 -low_memory '[doc-root]/app/uploads/2019/10/GripGrab-logo-black-1024x546.jpg' -o '[doc-root]/app/webp-express/webp-images/doc-root/app/uploads/2019/10/GripGrab-logo-black-1024x546.jpg.webp.lossless.webp' 2>&1

*Output:* 
Saving file '[doc-root]/app/webp-express/webp-images/doc-root/app/uploads/2019/10/GripGrab-logo-black-1024x546.jpg.webp.lossless.webp'
File:      [doc-root]/app/uploads/2019/10/GripGrab-logo-black-1024x546.jpg
Dimension: 1024 x 546
Output:    22412 bytes (0.32 bpp)
Lossless-ARGB compressed size: 22412 bytes
  * Header size: 254 bytes, image data size: 22133
  * Lossless features used: PALETTE
  * Precision Bits: histogram=4 transform=4 cache=0
  * Palette size:   256

Success
Reduction: 8% (went from 24 kb to 22 kb)

Picking lossy
cwebp succeeded :)

Converted image in 425 ms, reducing file size with 76% (went from 24 kb to 6 kb)
